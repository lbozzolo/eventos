<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class DietaCatogenica extends Entity
{
    public $table = 'dietas_catogenicas';

    public $fillable = [
        'grasa',
        'proteinas',
        'carbohidratos',
        'active'
    ];

    public static $rules = [
        '' => 'required',
    ];

    // Relationsips

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

}
