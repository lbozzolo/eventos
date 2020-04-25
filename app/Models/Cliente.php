<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Cliente extends Entity
{
    public $table = 'clientes';

    public $image_croppie_width = 450;
    public $image_croppie_height = 180;

    public $fillable = [
        'nombre',
    ];

    public static $rules = [
        'nombre' => 'required'
    ];

    // Relationships
    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
