<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;
use Eventos\User;

class Ocupacion extends Entity
{
    public $table = 'ocupaciones';
    public $timestamps = false;

    public $fillable = [
        'nombre',
        'slug',
    ];

    public static $rules = [
        'nombre' => 'required',
        'slug' => 'unique:ocupaciones'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
