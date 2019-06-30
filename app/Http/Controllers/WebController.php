<?php

namespace Kallfu\Http\Controllers;

use Kallfu\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Support\Facades\Mail;
use Kallfu\Http\Requests\ContactoRequest;
use Kallfu\Http\Requests\PreReservaRequest;
use Kallfu\Models\Gallery;
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

    public function preReserva(PreReservaRequest $request)
    {
        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'arival_date' => $request['arival_date'],
            'departure_date' => $request['departure_date'],
            'chooseAdults' => $request['chooseAdults'],
            'chooseChildren' => $request['chooseChildren'],
            'message' => $request['message'],
            'subject' => 'Pre Reserva'
        );

        Mail::send('emails.reserva', ['data' => $data], function($message) use ($data){
            $message->to(config('mail.username'));
            $message->subject($data['subject']);
            $message->from($data['email']);
        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');
    }

    public function postContact(ContactoRequest $request)
    {

//        $data = array(
//            'name' => $request['name'],
//            'email' => $request['email'],
//            'subject' => $request['subject'],
//            'message' => $request['message']
//        );
//
//        Mail::send('emails.contacto', ['data' => $data], function($message) use ($data){
//            $message->to(config('mail.username'));
//            $message->subject($data['subject']);
//            $message->from($data['email']);
//        });

        return redirect()->back()->with('ok', 'Su correo se ha enviado con éxito.');
    }

}
