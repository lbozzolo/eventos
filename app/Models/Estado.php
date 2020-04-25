<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Estado extends Entity
{
    public $table = 'estados';
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
