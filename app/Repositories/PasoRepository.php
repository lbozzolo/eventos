<?php

namespace KetoLife\Repositories;

use KetoLife\Models\Paso;
use InfyOm\Generator\Common\BaseRepository;

class PasoRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Paso::class;
    }

    public function orderPositions($pasos)
    {
        $pasos->first()->posicion = 1;
        $pasos->first()->save();
        $position = $pasos->first()->posicion;

        foreach($pasos as $paso){
            if($paso->id != $pasos->first()->id){
                $paso->posicion = $position + 1;
                $paso->save();
                $position ++;
            }
        }

        return $pasos;
    }
}
