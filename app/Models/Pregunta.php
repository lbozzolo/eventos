<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Pregunta extends Entity
{
    public $table = 'preguntas';
    public $timestamps = false;

    public $fillable = [
        'descripcion',
        'clase',
        'encuesta_id',
    ];

    // Relationships

    public function encuesta()
    {
        return $this->belongsTo(Encuesta::class);
    }

    public function opciones()
    {
        return $this->hasMany(Opcion::class);
    }

}
