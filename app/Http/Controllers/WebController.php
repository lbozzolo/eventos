<?php

namespace Kallfu\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Kallfu\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Support\Facades\Mail;
use Kallfu\Models\Gallery;
use Kallfu\Models\Image;
use Kallfu\Models\Room;
use Kallfu\Models\Service;
use Kallfu\Models\Slider;


class WebController extends AppBaseController
{
    public function index()
    {
        $data['slider'] = Slider::active()->first();
        $data['rooms'] = Room::all();

        return view('web.home')->with($data);
    }

    public function services()
    {
        $services = Service::all()->chunk(4);

        foreach($services as $key => $chunk){
            $data['services'][$key] = $chunk;
        }

        return view('web.services')->with($data);
    }

    public function habitaciones($type =  null)
    {
        $habitacion = Room::ofType($type)->first();
        return view('web.habitaciones')->with(['habitacion' => $habitacion, 'type' => $type]);
    }


    public function nosotros()
    {
        return view('web.nosotros');
    }

    public function galeria()
    {
        $gallery = Gallery::active()->first();
        //dd($gallery->images);
        return view('web.galeria')->with(['gallery' => $gallery]);
    }

    public function reservas()
    {
        return view('web.reservas');
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function postContacto(ContactRequest $request)
    {
        //dd($request->all());

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
            'subject' => 'Contacto de cliente'
        );


        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
            $message->to(config('mail.username'));
            $message->subject($data['subject']);
            $message->from($data['email']);
        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');


    }


}
