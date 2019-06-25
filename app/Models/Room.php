<?php

namespace Kallfu\Models;

use Kallfu\Models\Entity as Entity;

class Room extends Entity
{
    public $table = 'rooms';
    public $timestamps = false;

    public $image_croppie_width = 960;
    public $image_croppie_height = 720;

    public $fillable = [
        'type',
        'description'
    ];

    public static $rules = [
        'type' => 'required',
        'description' => '',
    ];

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type)->first();
    }

    // Relationships

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
