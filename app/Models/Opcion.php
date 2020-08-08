<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;
use Eventos\User;

class Opcion extends Entity
{
    public $table = 'opciones';
    public $timestamps = false;

    public $fillable = [
        'descripcion',
        'opcion',
        'pregunta_id',
    ];

    public static $rules = [
        'descripcion' => 'required|max:191',
        'opcion' => 'required|max:3',
    ];

    // Relationships

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
