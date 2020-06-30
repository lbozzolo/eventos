<?php

namespace Eventos\Repositories;

use Eventos\Models\Codigo;
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

    public function filterByMaxUsers(Proyecto $proyecto, $consultasTotal)
    {
        $inscriptos = $proyecto->inscriptos->count();
        $maximasConsultas = $proyecto->maximas_consultas;

        // Si el número de inscriptos es mayor a 1000 y las consultas hechas son 3 o más
        if($inscriptos > 999 && $inscriptos < 1500 && ($consultasTotal >= 3 || !$consultasTotal))
            $maximasConsultas = 3;

        // Si el número de inscriptos es mayor a 1500 y las consultas hechas son 2 o más
        if($inscriptos >= 1500 && $inscriptos < 2000 && ($consultasTotal >= 2 || !$consultasTotal))
            $maximasConsultas = 2;

        // Si el número de inscriptos es mayor a 2000 y ya se hizo como mínimo 1 consulta
        if($inscriptos >= 2000 && ($consultasTotal >= 1 || !$consultasTotal))
            $maximasConsultas = 1;

        return $maximasConsultas;
    }

    public function invalidCode($code, $userEmail)
    {
        $codigo = Codigo::where('code', $code)->first();
        $message = (!$codigo)? 'Código erróneo' : false;

        if($codigo){
            if($codigo->user && $codigo->user->email != $userEmail)
                $message = 'El código especificado ya ha sido identificado con otro email';
        }

        return $message;
    }

}
