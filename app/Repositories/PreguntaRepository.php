<?php

namespace Eventos\Repositories;

use Eventos\Models\Pregunta;
use InfyOm\Generator\Common\BaseRepository;

class PreguntaRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Pregunta::class;
    }

}
