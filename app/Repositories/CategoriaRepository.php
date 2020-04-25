<?php

namespace Eventos\Repositories;

use Eventos\Models\Categoria;
use InfyOm\Generator\Common\BaseRepository;

class CategoriaRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Categoria::class;
    }

}
