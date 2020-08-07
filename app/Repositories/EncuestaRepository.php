<?php

namespace Eventos\Repositories;

use Eventos\Models\Encuesta;
use InfyOm\Generator\Common\BaseRepository;

class EncuestaRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Encuesta::class;
    }

}
