<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class Dia extends Entity
{
    public $table = 'dias';

    public $fillable = [
        'posicion',
        'semana_id'
    ];

    public static $rules = [
        '' => 'required',
    ];

    // Relationships

    public function semana()
    {
        return $this->belongsTo(Semana::class);
    }

    public function comidas()
    {
        return $this->hasMany(Comida::class);
    }

}
