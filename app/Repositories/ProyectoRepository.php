<?php

namespace Eventos\Repositories;

use Eventos\Models\Proyecto;
use InfyOm\Generator\Common\BaseRepository;
use Carbon\Carbon;

class ProyectoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function model()
    {
        return Proyecto::class;
    }

    public function recordAmountUsersOnline($id, $amount)
    {
        $proyecto = Proyecto::find($id);
        $reportes = $proyecto->reportes;
        $record = null;

        if($reportes->count()){

            $last = Carbon::parse($reportes->last()->created_at);
            if(Carbon::now() >= $last->addMinute(5)->format('Y-m-d H:i')){
                $record = $proyecto->reportes()->create([
                    'proyecto_id' => $proyecto->id,
                    'cantidad_online' => $amount
                ]);
            }

        } else {

            $record = $proyecto->reportes()->create([
                'proyecto_id' => $proyecto->id,
                'cantidad_online' => $amount
            ]);

        }

        return $record;
    }

    public function todaysProyects()
    {
        $proyectos = Proyecto::all();
        $result = $proyectos->filter(function ($proyecto){
            if(Carbon::parse($proyecto->fecha) == Carbon::today()){
                return $proyecto;
            }
        });

        return $result;
    }

}
