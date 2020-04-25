<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Header extends Entity
{
    public $table = 'headers';

    public $image_croppie_width = 1200;
    public $image_croppie_height = 250;

    public $fillable = [
        'proyecto_id'
    ];

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
