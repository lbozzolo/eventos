<?php

namespace Eventos\Repositories;

use Eventos\Models\Auspiciante;
use InfyOm\Generator\Common\BaseRepository;

class AuspicianteRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Auspiciante::class;
    }
}
