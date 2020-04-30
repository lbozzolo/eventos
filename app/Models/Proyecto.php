<?php

namespace Eventos\Models;

use Carbon\Carbon;
use Eventos\Models\Entity as Entity;
use Eventos\User;

class Proyecto extends Entity
{
    public $table = 'proyectos';
    public $timestamps = false;

    public $image_croppie_width = 960;
    public $image_croppie_height = 720;

    public $fillable = [
        'nombre',
        'descripcion',
        'responsable',
        'cliente_id',
        'estado_id',
        'publico',
        'fecha',
    ];

    public static $rules = [
        '' => '',
    ];

    public function iframesRestantes()
    {
        $iframes = $this->iframes;
        $iframes->shift();

        return $iframes;
    }

    public function auspiciantesShuffle()
    {
        return $this->auspiciantes->shuffle();
    }

    public function getClienteSlugAttribute()
    {
        return str_slug($this->cliente->nombre);
    }

    public function getNombreSlugAttribute()
    {
        return str_slug($this->nombre);
    }

    public function getFechaAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('d-m-Y');
    }

    public function getHoraAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('h:i A');
    }

    // Relationships

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function iframes()
    {
        return $this->hasMany(Iframe::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function pdfs()
    {
        return $this->hasMany(Pdf::class);
    }

    public function header()
    {
        return $this->hasOne(Header::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function auspiciantes()
    {
        return $this->belongsToMany(Auspiciante::class);
    }

    public function inscriptos()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

}
