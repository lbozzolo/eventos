<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Auspiciante extends Entity
{
    public $table = 'auspiciantes';
    public $timestamps = false;

    public $image_croppie_width = 450;
    public $image_croppie_height = 180;

    public $fillable = [
        'nombre', 'url'
    ];

    public static $rules = [
        'nombre' => 'required|max:191',
        'url' => 'max:191',
    ];


    // Relationships
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
