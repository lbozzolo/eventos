<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;
use KetoLife\User;

class Profile extends Entity
{
    public $table = 'profiles';

    public $fillable = [
        'user_id',
        'imc',
        'edad',
        'edad_metabolica',
        'kcal',
        'peso',
        'estatura',
        'dieta_catogenica_id'
    ];

    public static $rules = [
        '' => 'required',
    ];

    // Relationsips

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dietaCatogenica()
    {
        return $this->belongsTo(DietaCatogenica::class);
    }

}
