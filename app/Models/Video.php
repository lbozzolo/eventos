<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Video extends Entity
{
    public $table = 'videos';

    public $fillable = [
        'title',
        'path',
        'proyecto_id',
        'active',
    ];

    public function getVideoIdAttribute()
    {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $this->path, $match);
        $youtube_id = $match[1];
        return $youtube_id;
    }

    // Relationships

    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class);
    }

}
