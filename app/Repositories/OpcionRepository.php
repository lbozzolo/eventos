<?php

namespace Eventos\Repositories;

use Eventos\Models\Opcion;
use InfyOm\Generator\Common\BaseRepository;

class OpcionRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Opcion::class;
    }

}
