<?php

namespace KetoLife\Repositories;

use KetoLife\Models\Receta;
use InfyOm\Generator\Common\BaseRepository;

class RecetaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function model()
    {
        return Receta::class;
    }

    public function ingredienteExists($receta, $ingrediente)
    {
        $collection = $receta->ingredientes->filter(function ($ing) use ($ingrediente) {
            return $ing->id == $ingrediente->id;
        });

        return $collection->count();
    }
}
