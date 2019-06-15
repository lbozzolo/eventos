<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class Comida extends Entity
{
    public $table = 'comidas';

    public $fillable = [
        'slug',
        'dia_id'
    ];

    public static $rules = [
        '' => 'required',
    ];

    // Relationships

    public function dia()
    {
        return $this->belongsTo(Dia::class);
    }

    public function receta()
    {
        return $this->belongsTo(Receta::class);
    }

}
