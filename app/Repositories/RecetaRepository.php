<?php

namespace KetoLife\Repositories;

use KetoLife\Models\Receta;
use InfyOm\Generator\Common\BaseRepository;

class RecetaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function model()
    {
        return Receta::class;
    }
}
