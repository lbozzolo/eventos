<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Tipo extends Entity
{
    public $table = 'tipos';
    public $timestamps = false;

    public $fillable = [
        'nombre',
        'slug',
    ];

    public static $rules = [
        'nombre' => 'required',
        'slug' => 'unique:estados'
    ];

    // Relationships

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }

}
