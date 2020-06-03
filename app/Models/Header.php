<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Header extends Entity
{
    public $table = 'headers';

    public $image_croppie_width = 1200;
    public $image_croppie_height = 150;

    public $fillable = [
        'proyecto_id'
    ];

    public function mainImage()
    {
        $response = asset('template-web/assets/images/banner_largo_blanco.jpg');

        if($this->images->count()) {
            $path = ($this->images()->where('main', 1)->first()) ? $this->images()->where('main', 1)->first()->path : $this->images->first()->path;
            $response = asset('imagenes/'.$path);
        }

        return $response;
    }

    // Relationships
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
