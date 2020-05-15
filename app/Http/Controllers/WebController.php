<?php

namespace Eventos\Http\Controllers;

use Carbon\Carbon;
use Eventos\Http\Requests\RegisterUser2Request;
use Eventos\Http\Requests\RegistreUserRequest;
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

//    public $paises = ['Argentina', 'Bolivia', 'Brasil', 'Chile', 'Ecuador', 'Paraguay', 'Uruguay'];

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
        $this->data['proyectos'] = Proyecto::active()->paginate(6);
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
        if($this->data['charla']->publico)
            return view('web.ingresar-charla')->with($this->data);

        if(!Auth::check())
            return redirect()->route('web.iniciar-sesion', ['cliente' => $this->data['charla']->cliente_slug, 'evento' => $this->data['charla']->nombre_slug, 'id' => $id]);

        // Si la charla es privada lo inscribo
        if(!$user->proyectos->contains($id))
            $this->data['ok'] = $this->messageInscription;

        $user->proyectos()->syncWithoutDetaching($id);

        $this->userRepository->sendInscripcionEmail($user, $id);

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

        if($inputs['newsletter'])
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

            // Convierto al dni en únicamente números
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

        $this->validateLogin($request);


        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
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

//        dd($request->all());

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

//        $data = [
//            'subject' => 'Mensaje',
//            'name' => 'Fulanito de tal',
//            'email' => 'fulano@mail.com',
//            'phone' => '982748234',
//            'company' => 'Rizomagroup',
//            'message' => 'Este es el mensaje del mail'
//        ];

        $this->data['charla'] = Proyecto::find(1);
        $user = User::find(1);

        $data = array(
            'fullname' => $user->fullname,
            'evento' => $this->data['charla']->nombre,
            'cliente' => $this->data['charla']->cliente->nombre,
            'email' => $user->email,
            'dni' => '234234234',
            'fecha' => $this->data['charla']->fecha,
            'hora' => $this->data['charla']->hora,
            'logo' => $this->data['charla']->cliente->mainImage(),
            'url' => route('web.charlas.ingresar',[
                'cliente' => $this->data['charla']->cliente_slug,
                'evento' => $this->data['charla']->nombre_slug,
                'id' => $this->data['charla']->id])
        );

        return view('emails.inscripcion')->with(['data' => $data]);
    }

}
