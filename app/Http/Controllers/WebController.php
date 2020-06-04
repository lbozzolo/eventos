<?php

namespace Eventos\Http\Controllers;

use Carbon\Carbon;
use Eventos\Http\Requests\RegisterUser2Request;
use Eventos\Http\Requests\RegistreUserRequest;
use Eventos\Models\Estado;
use Eventos\Models\Proyecto;
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


class WebController extends AppBaseController
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';
    private $data;
    private $userRepository;
    private $messageInscription = 'Te has inscripto en el evento exitosamente. Recibirás un correo de confirmación. 
                    Por favor revisá tu bandeja de correo no deseado o spam y marcalo como "correo deseado" o movelo a la bandeja de entrada';

    public $paises = array("Argentina","Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega","Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue");

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    public function index()
    {
        return view('web.home')->with($this->data);
    }

    public function charlas()
    {
        $inactivoID = Estado::where('slug', 'inactivo')->first()->id;
        $this->data['proyectos'] = Proyecto::where('estado_id', '!=', $inactivoID)->orderBy('fecha', 'desc')->paginate(6);

//        $this->data['proyectos'] = Proyecto::active()->finished()->orderBy('fecha', 'desc')->paginate(6);
        return view('web.charlas')->with($this->data);
    }

    public function showCharla($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::find($id);
//        $this->data['charla'] = Proyecto::active($id)->first();

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
        if($this->data['charla']->publico)
            return view('web.ingresar-charla')->with($this->data);

        if(!Auth::check())
            return redirect()->route('web.iniciar-sesion', ['cliente' => $this->data['charla']->cliente_slug, 'evento' => $this->data['charla']->nombre_slug, 'id' => $id]);

        if(!$user->isInscripto($id)){
            $this->data['ok'] = $this->messageInscription;
            $user->proyectos()->syncWithoutDetaching($id);
            $this->userRepository->sendInscripcionEmail($user, $id);
        }

        if($this->data['charla']->isGoingOn()){

            $inscripciones = Auth::user()->proyectos()->where('proyecto_id', $this->data['charla']->id)->get();
            foreach($inscripciones as $inscripcion){
                $inscripcion->pivot->attendment = 1;
                $inscripcion->pivot->save();
            }
        }

        return view('web.ingresar-charla')->with($this->data);
    }

    public function inscripcion($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

        if(!$this->data['charla'])
            return abort(404);

        // Si la charla es pública lo envío a la charla
        if($this->data['charla']->publico)
            return view('web.ingresar-charla')->with($this->data);

        if(Auth::check())
            return redirect()->route('web.charlas.ingresar', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);

        return view('web.charla-inscripcion')->with($this->data);
    }

    public function registro($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::active($id)->first();

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

        $user = User::create($inputs);
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

        if(!$userAttempt){

            if(!$request['password'])
                return redirect()->back()->withErrors('Debe ingresar su DNI, pasaporte o Id');

            if(is_numeric($request['password']))
                return redirect()->back()->withErrors('El DNI, pasaporte o Id debe ser un número');

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

            return redirect()->route('web.get.registro', ['userId' => $this->data['user']->id, 'eventoId' => $this->data['charla']->id]);

        }

        if($userAttempt->name == $userAttempt->email){
            $this->data['user'] = $userAttempt;
            return redirect()->route('web.get.registro', ['userId' => $this->data['user']->id, 'eventoId' => $this->data['charla']->id]);
        }

        $this->redirectTo = route('web.charlas.ingresar', [
            'cliente' => $this->data['charla']->cliente_slug,
            'evento' => $this->data['charla']->nombre_slug,
            'id' => $id
        ]);

//        $inscripcion = $this->data['charla']->inscriptos()->where('user_id', $userAttempt->id)->first();
//        $inscripcion->pivot->updated_at = Carbon::now();
//        $inscripcion->pivot->save();


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
        if($this->data['charla']->publico)
            return redirect()->route('web.charlas.ingresar', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);

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
        $user = User::find(22);
        $proyecto = Proyecto::find(1);

        $reportes = $proyecto->reportes;

        $last = Carbon::parse($reportes->last()->created_at)->format('Y-m-d H:i');

//        $inscripcion = $user->proyectos()->where('attendment', 1)->get();
//        $inscripcion = $user->proyectos()->where('proyecto_id', $proyecto->id)->first()->pivot->attendment;
        $inscripcion = $user->proyectos()->find($proyecto->id)->first();

        dd($inscripcion);

        $proyecto->isFinished();
        if($proyecto->isGoingOn()){
            return;
        }

        dd(Carbon::now()->format('Y-m-d H:i') >= $proyecto->fecha_formatted_view);
        dd($proyecto->fecha_formatted);

        $conectados = $proyecto->connected();
        $porcentaje = $proyecto->connectedPercentage();


        dd($user->isOnline());


    }

}
