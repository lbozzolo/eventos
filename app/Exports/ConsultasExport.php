<?php

namespace Eventos\Exports;

use Eventos\Models\Proyecto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ConsultasExport implements FromView
{
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $proyecto = Proyecto::find($this->id);

        $consultas = $proyecto->consultas()->get([
            'nombre',
            'email',
            'texto',
            'consultas.created_at',
        ]);


        return view('exports.consultas', ['consultas' => $consultas]);
    }

}
