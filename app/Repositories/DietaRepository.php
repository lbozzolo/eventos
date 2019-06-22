<?php

namespace KetoLife\Repositories;

use KetoLife\Models\Dieta;
use InfyOm\Generator\Common\BaseRepository;

class DietaRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Dieta::class;
    }
}
