<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Encuesta extends Entity
{
    public $table = 'encuestas';
    public $timestamps = false;

    public $fillable = [
        'nombre',
        'proyecto_id',
        'iframe_id',
    ];

    public static $rules = [
        'nombre' => 'required|max:191',
    ];

    // Relationships

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }

    public function iframe()
    {
        return $this->belongsTo(Iframe::class);
    }

}
