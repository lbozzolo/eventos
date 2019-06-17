<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class Paso extends Entity
{
    public $table = 'pasos';

    public $image_croppie_width = 960;
    public $image_croppie_height = 720;

    public $fillable = [
        'posicion',
        'descripcion',
        'receta_id'
    ];

    public static $rules = [
        'descripcion' => 'required|max:500',
    ];

    public function receta()
    {
        return $this->belongsTo(Receta::class);
    }
}
