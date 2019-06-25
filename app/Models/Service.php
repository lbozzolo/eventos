<?php

namespace Kallfu\Models;

use Kallfu\Models\Entity as Entity;

class Service extends Entity
{
    public $table = 'services';
    public $timestamps = false;

    public $fillable = [
        'name',
        'description',
        'slug',
    ];

    public static $rules = [
        'name' => 'required',
    ];

    public function getNameAttribute()
    {
        return ucwords($this->attributes['name']);
    }

}
