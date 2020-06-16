<?php

namespace Eventos\Exports;

use Eventos\Models\Proyecto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CodigosExport implements FromView
{
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $proyecto = Proyecto::find($this->id);
        $codigos = $proyecto->codigos()->get(['code', 'user_id']);

        return view('exports.codigos', ['codigos' => $codigos, 'proyecto' => $proyecto->nombre, 'cliente' => $proyecto->cliente->nombre]);
    }

}
