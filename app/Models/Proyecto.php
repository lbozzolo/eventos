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
    public $addHours = 4;

    public $fillable = [
        'nombre',
        'descripcion',
        'responsable',
        'cliente_id',
        'estado_id',
        'publico',
        'fecha',
        'duracion',
    ];

    public static $rules = [
        'nombre' => 'required|max:191',
        'descripcion' => 'required|max:191',
        'duracion' => 'required',
    ];

    public $daysSpanish = [
        0 => 'domingo',
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
    ];

    public function iframesRestantes()
    {
        $iframes = $this->iframes;
        $iframes->shift();

        return $iframes;
    }

    public function isFinished()
    {
        return Carbon::parse($this->attributes['fecha'])->addHours($this->addHours)->format('Y-m-d H:i') < Carbon::now()->format('Y-m-d H:i');
    }

    public function getNameOfDay($date)
    {
        $fecha = Carbon::parse($date);

        return ucfirst($this->daysSpanish[$fecha->dayOfWeek]);
    }

    public function scopeActive($query, $id = null)
    {
        $activo = Estado::where('slug', '=', 'activo')->first()->id;
        $result = $query->where('estado_id', '=', $activo)->orderBy('id', 'desc');

        if($id)
            $result = $query->where('estado_id', '=', $activo)->where('id', '=', $id);

        return $result;
    }

    public function scopeFindactive()
    {
        $activo = Estado::where('slug', '=', 'activo')->first()->id;
        $activo = (string)$activo;

        return $this->where('estado_id', '=', $activo);
    }

    public function scopeConsultasArchivadas()
    {
        return $this->consultas()->where('archivado', '=', 1)->get();
    }

    public function scopeConsultasRecientes()
    {
        return $this->consultas()->where('archivado', '=', null)->get();
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

    public function getFechaFormattedAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('d-m-Y H:i');
    }

    public function getFechaFormattedViewAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('Y-m-d H:i');
    }

    public function getFechaCompletaAttribute()
    {
        return Carbon::parse($this->attributes['fecha']);
    }

    public function getHoraAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('H:i');
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
