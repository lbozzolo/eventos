<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Grupo extends Entity
{
    public $table = 'grupos';

    public $fillable = [
        'nombre',
        'descripcion',
        'categoria_id'
    ];

    public static $rules = [
        'nombre' => 'required|max:191',
        'descripcion' => 'max:191',
    ];

    public function getNombreSlugAttribute()
    {
        return str_slug($this->nombre);
    }

    // Relationships

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class);
    }

}
