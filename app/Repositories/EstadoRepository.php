<?php

namespace Eventos\Repositories;

use Eventos\Models\Estado;
use InfyOm\Generator\Common\BaseRepository;

class EstadoRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Estado::class;
    }

}
