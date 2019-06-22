<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class Receta extends Entity
{
    public $table = 'recetas';

    public $image_croppie_width = 960;
    public $image_croppie_height = 720;

    public $fillable = [
        'nombre',
        'descripcion',
        'tiempo',
        'active',
        'calorias',
        'url_video',
    ];

    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'max:500',
    ];

    public static $ingredientesRules = [
        'ingrediente' => 'required',
        'cantidad' => 'required|min:0|max:999',
        'medida' => 'required',
    ];

    // Relationships

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class)->withPivot('id', 'cantidad', 'medida');
    }

    public function pasos()
    {
        return $this->hasMany(Paso::class);
    }

    public function comidas()
    {
        return $this->hasMany(Comida::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
