<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Categoria extends Entity
{
    public $table = 'categorias';
    public $timestamps = false;

    public $fillable = [
        'nombre',
        'slug',
    ];

    public static $rules = [
        'nombre' => 'required',
        'slug' => 'unique:estados'
    ];

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class);
    }
}
