<?php

namespace Eventos\Http\Controllers;

use Carbon\Carbon;
use Eventos\Models\Proyecto;
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
use Eventos\Models\Email;
use Eventos\Models\Slider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class WebController extends AppBaseController
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';
    private $data;
    public $paises = ['Argentina', 'Bolivia', 'Brasil', 'Chile', 'Ecuador', 'Paraguay', 'Uruguay'];

    public function index()
    {
        $this->data['proyectos'] = Proyecto::all()->sortByDesc('id')->take(3);
        return view('web.home')->with($this->data);
    }

    public function charlas()
    {
        $this->data['proyectos'] = Proyecto::orderBy('id', 'desc')->paginate(6);
        return view('web.charlas')->with($this->data);
    }

    public function showCharla($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::findOrFail($id);
        return view('web.show-charla')->with($this->data);
    }

    public function ingresarCharla($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::findOrFail($id);
        $user = Auth::user();

        // Si la charla es pública lo envío a la charla
        if($this->data['charla']->publico)
            return view('web.ingresar-charla')->with($this->data);

        // Si la charla es privada lo inscribo
        if(!$user->proyectos->contains($id))
            $this->data['ok'] = 'Se ha inscripto en la charla exitosamente.';

        $user->proyectos()->syncWithoutDetaching($id);

        return view('web.ingresar-charla')->with($this->data);
    }

    public function inscripcion($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::findOrFail($id);

        if(Auth::check())
            return redirect()->route('web.charlas.ingresar', ['cliente' => $cliente, 'evento' => $evento, 'id' => $id]);

        return view('web.charla-inscripcion')->with($this->data);
    }

    public function registro($cliente, $evento, $id)
    {
        $this->data['charla'] = Proyecto::findOrFail($id);
        $this->data['paises'] = $this->paises;
        return view('web.registro')->with($this->data);
    }

    public function postRegistro(Request $request, $id)
    {
        $this->data['charla'] = Proyecto::find($id);

        $inputs = $request->input();
        $inputs['password'] = Hash::make($inputs['dni']);

        $user = User::create($inputs);
        $user->assignRole('Inscripto');
        $user->save();

        Auth::attempt(['email' => $user->email, 'password' => $user->dni]);

        $redirect = [
            'cliente' => $this->data['charla']->cliente_slug,
            'evento' => $this->data['charla']->nombre_slug,
            'id' => $id
        ];

        return redirect()->route('web.charlas.ingresar', $redirect)->with('ok', 'Se ha inscripto en el evento exitosamente!');
    }

    public function login(Request $request, $id)
    {
        $this->data['charla'] = Proyecto::find($id);

        $this->redirectTo = route('web.charlas.ingresar', ['cliente' => $this->data['charla']->cliente_slug, 'evento' => $this->data['charla']->nombre_slug, 'id' => $id]);

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
        $this->data['charla'] = Proyecto::find($id);

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
            'subject' => $request['subject'],
            'telefono' => $request['telefono'],
            'message' => $request['message']
        );
        
        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
            $message->to(config('mail.username'));
            $message->subject($data['subject']);
            $message->from($data['email']);
        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');
    }

    public function newsletter(CreateNewsletterRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|recaptcha',
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
            return redirect()->back()->with('ok', 'Se ha suscripto con éxito');
        }

        return redirect()->back()->withErrors('Ocurrió un error. No se pudo suscribir.');
    }

}
