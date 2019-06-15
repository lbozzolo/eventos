<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class Ingrediente extends Entity
{
    public $table = 'ingredientes';
    public $timestamps = false;

    public $fillable = [
        'nombre',
    ];

    public static $rules = [
        'nombre' => 'required',
    ];

}
