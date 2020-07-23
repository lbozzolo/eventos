<?php

namespace Eventos\Http\Controllers;

use Carbon\Carbon;
use Eventos\Http\Requests\CodigoRequest;
use Eventos\Http\Requests\RegisterUser2Request;
use Eventos\Http\Requests\RegistreUserRequest;
use Eventos\Http\Requests\StoreIdentificacionRequest;
use Eventos\Models\Codigo;
use Eventos\Models\Ocupacion;
use Eventos\Models\Proyecto;
use Eventos\Repositories\ProyectoRepository;
use Eventos\Repositories\UserRepository;
use Eventos\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Support\Facades\Mail;
use Eventos\Http\Requests\ContactoRequest;
use Eventos\Http\Requests\CreateNewsletterRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Spatie\Permission\Models\Role;


class WebController extends AppBaseController
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';
    private $data;
    private $userRepository;
    private $projectRepository;
    private $messageInscription = 'Te has inscripto en el evento exitosamente. Recibirás un correo de confirmación. 
                    Por favor revisá tu bandeja de correo no deseado o spam y marcalo como "correo deseado" o movelo a la bandeja de entrada';

    public $paises = array("Argentina","Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega","Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue");

    public function __construct(UserRepository $userRepo, ProyectoRepository $projectRepository)
    {
        $this->userRepository = $userRepo;
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        $this->data['charlas'] = $this->projectRepository->todaysProyects();
        return view('web.home')->with($this->data);
    }

    public function charlas()
    {
        $this->data['proyectos'] = Proyecto::orderBy('fecha', 'DESC')->active()->paginate(6);
        return view('web.charlas')->with($this->data);
    }

    public function showCharla($cliente, $evento, $id)
    {

        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        if($this->data['charla']->isFinished())
            return view('web.show-charla-finalizada')->with($this->data);

        return view('web.show-charla')->with($this->data);
    }

    public function ingresarCharla($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        $user = Auth::user();

        // Si la charla es pública lo envío a la charla
//        if($this->data['charla']->publico)
        if($this->data['charla']->tipoProyecto() == 'Público')
            return view('web.ingresar-charla')->with($this->data);

        if(!Auth::check())
            return redirect()->route('web.iniciar-sesion', ['cliente' => $this->data['charla']->cliente_slug, 'evento' => $this->data['charla']->nombre_slug, 'id' => $id]);

        if(!$user->isInscripto($id)){
            $this->data['ok'] = $this->messageInscription;
            $user->proyectos()->syncWithoutDetaching($id);
            $this->userRepository->sendInscripcionEmail($user, $id);
        }

//        if($this->data['charla']->isGoingOn()){
//
//            $inscripciones = Auth::user()->proyectos()->where('proyecto_id', $this->data['charla']->id)->get();
//            foreach($inscripciones as $inscripcion){
//                $inscripcion->pivot->attendment = 1;
//                $inscripcion->pivot->save();
//            }
//        }

        // Si el evento está finalizado incremento las vistas en 1
        if($this->data['charla']->isFinished()){
            $this->data['charla']->vistas_finalizado++;
            $this->data['charla']->save();
        }

        return view('web.ingresar-charla')->with($this->data);
    }

    public function ingresarCodigo($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        return view('web.ingresar-codigo')->with($this->data);
    }

    public function checkCodigo(CodigoRequest $request, $id)
    {
        $proyecto = Proyecto::active($id)->first();

        $codigo = Codigo::where('code', $request['code'])->first();

        if(!$codigo)
            return redirect()->back()->withErrors('Código erróneo');

        $this->data['cliente'] = $proyecto->cliente_slug;
        $this->data['evento'] = $proyecto->nombre_slug;
        $this->data['id'] = $id;
        $this->data['codigo'] = $codigo->code;

        return redirect()->route('web.charlas.identificacion', $this->data);
    }

    public function identificacion($cliente, $evento, $id, $codigo)
    {
        $charla = Proyecto::find($id);
        return view('web.identificacion')->with(['cliente' => $cliente, 'evento' => $evento, 'id' => $id, 'charla' => $charla, 'codigo' => $codigo]);
    }

    public function storeIdentificacion(StoreIdentificacionRequest $request, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();
        $redirect = [
            'cliente' => $this->data['charla']->cliente_slug,
            'evento' => $this->data['charla']->nombre_slug,
            'id' => $id
        ];

        $codigo = Codigo::where('code', $request['code'])->first();

        // Si el código no existe redirecciono con código erróneo
        if(!$codigo)
            return redirect()->back()->withErrors('Código erróneo');

        if($codigo->user){

            if($codigo->user->email != $request['email'])
                return redirect()->back()->withErrors('El código especificado ya ha sido identificado con otro email');

            return redirect()->route('web.charlas.ingresar', $redirect)
                ->with('ok', 'Ya estás listo para disfrutar el evento. Recordá que cada vez quieras ingresar se te soilicitará el código de acceso que utilizaste');

        }

        $user = User::where('email', $request['email'])->first();

        // Si el código se encuentra en el listado de códigos disponibles

        $inputs = [
            'name' => 'Usuario',
            'lastname' => 'anónimo',
            'dni' => $request['code'],
            'email' => $request['email'],
        ];

        $inputs['password'] = Hash::make($request['code']);

        $user = User::create($inputs);
        $rolePaiduser = Role::where('name', 'Paiduser')->first();
        $user->assignRole($rolePaiduser);
        $user->save();

        $user->proyectos()->syncWithoutDetaching($id);

        // Marco el código como 'usado' para que no pueda usarlo otro usuario
        $codigo = Codigo::where('code', $request['code'])->first();
        $codigo->uso = 1;
        $codigo->save();

        $user->codigo()->save($codigo);

        Auth::attempt(['email' => $user->email, 'password' => $user->dni]);


        return redirect()->route('web.charlas.ingresar', $redirect)->with('ok', 'Ya estás listo para disfrutar el evento. Recordá que cada vez quieras ingresar se te soilicitará el código de acceso que utilizaste');
    }

    public function inscripcion($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        // Si la charla es pública lo envío a la charla
        if($this->data['charla']->tipoProyecto() == 'Público')
            return view('web.ingresar-charla')->with($this->data);

        if($this->data['charla']->tipoProyecto() == 'Pago')
            return redirect()->route('web.charlas.ingresar.codigo', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);

        if(Auth::check())
            return redirect()->route('web.charlas.ingresar', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);

        return redirect()->route('web.charlas.registro', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);
//        return view('web.charla-inscripcion')->with($this->data);
    }

    public function registro($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();
        $this->data['ocupaciones'] = Ocupacion::pluck('nombre', 'id');

        if(!$this->data['charla'])
            return abort(404);

        $this->data['paises'] = $this->paises;
        return view('web.registro')->with($this->data);
    }

    public function postRegistro(RegistreUserRequest $request, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        $inputs = $request->input();
        $inputs['password'] = Hash::make($inputs['dni']);

        $userExist = $this->userRepository->userExists($request);
        $user = ($userExist)? $userExist : User::create($inputs);

        $user->assignRole('Inscripto');
        $user->save();

        $user->proyectos()->syncWithoutDetaching($id);

        Auth::attempt(['email' => $user->email, 'password' => $user->dni]);

        $data = array(

            'fullname' => $user->fullname,
            'evento' => $this->data['charla']->nombre,
            'cliente' => $this->data['charla']->cliente->nombre,
            'email' => $user->email,
            'dni' => $user->dni,
            'fecha' => $this->data['charla']->fecha,
            'hora' => $this->data['charla']->hora,
            'logo' => $this->data['charla']->cliente->mainImage(),
            'url' => route('web.charlas.ingresar',[
                    'cliente' => $this->data['charla']->cliente_slug,
                    'evento' => $this->data['charla']->nombre_slug,
                    'id' => $this->data['charla']->id])
        );

        Mail::send('emails.inscripcion', ['data' => $data], function($message) use ($data){
            $message->to($data['email']);
            $message->subject('Inscripción a evento online');
            $message->from(config('mail.from.address'));
        });


        $redirect = [
            'cliente' => $this->data['charla']->cliente_slug,
            'evento' => $this->data['charla']->nombre_slug,
            'id' => $id
        ];

        return redirect()->route('web.charlas.ingresar', $redirect)->with('ok', $this->messageInscription);
    }

    public function postRegistro2(RegisterUser2Request $request, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        $inputs = $request->input();

        $user = User::find($inputs['user_id']);
        $user->assignRole('Inscripto');

        $user->name = $inputs['name'];
        $user->lastname = $inputs['lastname'];
        $user->email = $inputs['email'];
        $user->dni = $inputs['dni'];
        $user->phone = $inputs['phone'];
        $user->pais = $inputs['pais'];
        $user->localidad = $inputs['localidad'];
        $user->ocupacion = $inputs['ocupacion'];

        $user->password = Hash::make($inputs['dni']);

        $user->save();

        $user->proyectos()->syncWithoutDetaching($id);

        if(isset($inputs['newsletter']))
            DB::table('newsletter')->insert(['email' => $user->email, 'created_at' => Carbon::today(), 'updated_at' => Carbon::today()]);

        Auth::attempt(['email' => $user->email, 'password' => $user->dni]);

        $data = array(

            'fullname' => $user->fullname,
            'evento' => $this->data['charla']->nombre,
            'cliente' => $this->data['charla']->cliente->nombre,
            'email' => $user->email,
            'dni' => $user->dni,
            'fecha' => $this->data['charla']->fecha,
            'hora' => $this->data['charla']->hora,
            'logo' => $this->data['charla']->cliente->mainImage(),
            'url' => route('web.charlas.ingresar',[
                'cliente' => $this->data['charla']->cliente_slug,
                'evento' => $this->data['charla']->nombre_slug,
                'id' => $this->data['charla']->id])
        );

        Mail::send('emails.inscripcion', ['data' => $data], function($message) use ($data){
            $message->to($data['email']);
            $message->subject('Inscripción a evento online');
            $message->from(config('mail.from.address'));
        });


        $redirect = [
            'cliente' => $this->data['charla']->cliente_slug,
            'evento' => $this->data['charla']->nombre_slug,
            'id' => $id
        ];

        $message = 'Te has inscripto en el evento exitosamente. Recibirás un correo de confirmación. 
                    Por favor revisá tu bandeja de correo no deseado o spam y marcalo como "correo deseado" o movelo a la bandeja de entrada';

        return redirect()->route('web.charlas.ingresar', $redirect)->with('ok', $this->messageInscription);
    }

    public function getRegistro2($userId, $eventoId)
    {
        $this->data['charla'] = Proyecto::active($eventoId)->first();

        if(!$this->data['charla'])
            return abort(404);

        $this->data['user'] = User::find($userId);
        $this->data['paises'] = $this->paises;

        return view('web.registro2')->with($this->data);
    }

    public function login(Request $request, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        $this->data['paises'] = $this->paises;


        $userAttempt = User::where('email', $request['email'])->first();

        //========================
        // Si el Usuario no existe
        //========================

        if(!$userAttempt){

            if(!$request['password'])
                return redirect()->back()->withErrors('Debe ingresar su DNI, pasaporte o Id');

            if(!is_numeric($request['password']))
                return redirect()->back()->withErrors('El DNI, pasaporte o Id debe ser un número');

            if(isset($request['code'])){

                $invalid = $this->projectRepository->invalidCode($request['code'], $request['email']);

                if($invalid)
                    return redirect()->back()->withErrors($invalid);

//                $codigo = Codigo::where('code', $request['code'])->first();
//
//                // Si el código no existe redirecciono con código erróneo
//                if(!$codigo)
//                    return redirect()->back()->withErrors('Código erróneo');
//
//                // Si el código ya fue utilizado por otra persona
//                //====================================================
//                if($codigo->user && $codigo->user->email != $request['email'])
//                    return redirect()->back()->withErrors('El código especificado ya ha sido identificado con otro email');

                //==============================================
                // Si el código NO fue utilizado creo el usuario
                //==============================================

                // Convierto al dni en únicamente números quitando puntos y comas
                $request['password'] = preg_replace('/[^0-9]/', '', $request['password']);

                // Creo el usuario y le asigno password = dni
                $password = Hash::make($request['password']);
                $this->data['user'] = User::create([
                    'name' => $request['email'],
                    'lastname' => $request['email'],
                    'email' => $request['email'],
                    'dni' => $request['password'],
                    'password' => $password,
                ]);

                // Le asigno el código al usuario
                $codigo = Codigo::where('code', $request['code'])->first();
                $this->data['user']->codigo()->save($codigo);

                // Redirecciono a vista para completar el resto de los datos
                return redirect()->route('web.get.registro', ['userId' => $this->data['user']->id, 'eventoId' => $this->data['charla']->id]);

            }

            // Convierto al dni en únicamente números quitando puntos y comas
            $request['password'] = preg_replace('/[^0-9]/', '', $request['password']);

            // Creo el usuario y le asigno password = dni
            $password = Hash::make($request['password']);
            $this->data['user'] = User::create([
                'name' => $request['email'],
                'lastname' => $request['email'],
                'email' => $request['email'],
                'dni' => $request['password'],
                'password' => $password,
            ]);

            // Redirecciono a vista para completar el resto de los datos
            return redirect()->route('web.get.registro', ['userId' => $this->data['user']->id, 'eventoId' => $this->data['charla']->id]);

        }

        // Si el Usuario existe
        //=====================

        // ¿Es un evento pago?
        if(isset($request['code'])){

            $invalid = $this->projectRepository->invalidCode($request['code'], $request['email']);

            if($invalid)
                return redirect()->back()->withErrors($invalid);

            // Le asigno el código al usuario
            $codigo = Codigo::where('code', $request['code'])->first();
            $this->data['user'] = $userAttempt;
            $this->data['user']->codigo()->save($codigo);

        }

        // Si es el primer logueo
        if($userAttempt->name == $userAttempt->email){
            $this->data['user'] = $userAttempt;
            return redirect()->route('web.get.registro', ['userId' => $this->data['user']->id, 'eventoId' => $this->data['charla']->id]);
        }

        $this->redirectTo = route('web.charlas.ingresar', [
            'cliente' => $this->data['charla']->cliente_slug,
            'evento' => $this->data['charla']->nombre_slug,
            'id' => $id
        ]);

        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request))
            return $this->sendLoginResponse($request);

        $this->redirectTo = route('home');
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function nosotros()
    {
        return view('web.nosotros');
    }

    public function contactanos()
    {
        return view('web.contactanos');
    }

    public function iniciarSesion($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        // Si la charla es pública lo envío a la charla
        if($this->data['charla']->tipoProyecto() == 'Público')
            return redirect()->route('web.charlas.ingresar', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);

        // Si la charla es paga lo envío al login de charlas pagas
        if($this->data['charla']->tipoProyecto() == 'Pago')
            return redirect()->route('web.charlas.ingresar.codigo', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);

        // Si la charla es privada y está logueado lo envío a la charla
        if(Auth::check())
            return redirect()->route('web.charlas.ingresar', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);

        // Si la charla es privada y no está logueado lo envío al login
        return view('web.iniciar-sesion')->with($this->data);
    }

    public function postContact(ContactoRequest $request)
    {
        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'company' => $request['company'],
            'message' => $request['message']
        );

        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
            $message->to(config('mail.from.address'));
            $message->subject('Email de contacto de eventum.com.ar');
            $message->from($data['email']);
        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');
    }

    public function newsletter(CreateNewsletterRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if($request->has('email')){
            DB::table('newsletter')->insert(
                [
                    'email' => $request['email'],
                    'created_at' => Carbon::today(),
                    'updated_at' => Carbon::today(),
                ]
            );
            return redirect()->back()->with('ok', 'Se ha suscripto a nuestro newsletter con éxito');
        }

        return redirect()->back()->withErrors('Ocurrió un error. No se pudo suscribir.');
    }

    public function test(Request $request)
    {
        $this->data['item'] = Proyecto::find(2);
        $this->data['item2'] = Proyecto::find(1);

        return view('proyectos.reportes-fake')->with($this->data);
    }

}
