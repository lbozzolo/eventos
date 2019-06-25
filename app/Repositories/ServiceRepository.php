<?php

namespace Kallfu\Repositories;

use Kallfu\Models\Service;
use InfyOm\Generator\Common\BaseRepository;

class ServiceRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Service::class;
    }
}
