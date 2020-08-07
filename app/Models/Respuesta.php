<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Respuesta extends Entity
{
    public $table = 'respuestas';

    public $fillable = [
        'user_id',
        'encuesta_id',
        'pregunta_id',
        'opcion_id',
        'texto',
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function encuesta()
    {
        return $this->belongsTo(Encuesta::class);
    }

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }

    public function opcion()
    {
        return $this->belongsTo(Opcion::class);
    }

}
