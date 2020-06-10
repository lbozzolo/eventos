<?php

namespace Eventos\Http\Controllers;

use Eventos\Models\Proyecto;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proyectos = Proyecto::orderBy('id', 'desc')->take(4)->get();
        return view('home')->with(['proyectos' => $proyectos]);
    }
}
