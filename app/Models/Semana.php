<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class Semana extends Entity
{
    public $table = 'semanas';

    public $fillable = [
        'posicion',
        'dieta_id'
    ];

    public static $rules = [
        '' => 'required',
    ];

    // Relationships

    public function dieta()
    {
        return $this->belongsTo(Dieta::class);
    }

    public function dias()
    {
        return $this->hasMany(Dia::class);
    }

}
