<?php

namespace Kallfu\Repositories;

use Kallfu\Models\Room;
use InfyOm\Generator\Common\BaseRepository;

class RoomRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function model()
    {
        return Room::class;
    }

    public function ingredienteExists($receta, $ingrediente)
    {
        $collection = $receta->ingredientes->filter(function ($ing) use ($ingrediente) {
            return $ing->id == $ingrediente->id;
        });

        return $collection->count();
    }
}
