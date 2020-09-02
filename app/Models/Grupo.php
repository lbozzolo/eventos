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

    public function scopeActive($query)
    {
        $activo = Estado::where('slug', '=', 'activo')->first()->id;
        $finalizado = Estado::where('slug', '=', 'finalizado')->first()->id;

        return $this->whereHas('proyectos', function($q) use ($activo, $finalizado) {
            $q->where('estado_id', $activo)->orWhere('estado_id', '=', $finalizado);

        });
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
