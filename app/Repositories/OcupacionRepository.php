<?php

namespace Eventos\Repositories;

use Eventos\Models\Ocupacion;
use InfyOm\Generator\Common\BaseRepository;

class OcupacionRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Ocupacion::class;
    }

}
