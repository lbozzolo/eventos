<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class Paso extends Entity
{
    public $table = 'pasos';

    public $fillable = [
        'posicion',
        'descripcion',
        'receta_id'
    ];

    public static $rules = [
        'posicion' => 'required',
        'descripcion' => 'required',
    ];

    public function receta()
    {
        return $this->belongsTo(Receta::class);
    }
}
