<?php

namespace KetoLife\Repositories;

use KetoLife\Models\Ingrediente;
use InfyOm\Generator\Common\BaseRepository;

class IngredienteRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Ingrediente::class;
    }
}
