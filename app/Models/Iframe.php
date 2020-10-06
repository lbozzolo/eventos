<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Iframe extends Entity
{
    public $table = 'iframes';

    public $fillable = [
        'title',
        'path',
        'proyecto_id',
        'type',
        'active',
    ];

    public function getVideoIdAttribute()
    {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $this->path, $match);
        $youtube_id = $match[1];
        return $youtube_id;
    }

    public function insecureURL()
    {
        $url = $this->attributes['path'];
        return (strpos($url, 'http://') !== 0)? false : true;
    }

    // Relationships

    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function encuesta()
    {
        return $this->hasOne(Encuesta::class);
    }

}
