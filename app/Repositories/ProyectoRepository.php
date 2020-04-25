<?php

namespace Eventos\Repositories;

use Eventos\Models\Proyecto;
use InfyOm\Generator\Common\BaseRepository;

class ProyectoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function model()
    {
        return Proyecto::class;
    }

}
