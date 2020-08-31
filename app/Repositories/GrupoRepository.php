<?php

namespace Eventos\Repositories;

use Eventos\Models\Grupo;
use InfyOm\Generator\Common\BaseRepository;

class GrupoRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Grupo::class;
    }

}
