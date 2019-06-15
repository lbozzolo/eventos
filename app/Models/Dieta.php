<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;
use KetoLife\User;

class Dieta extends Entity
{
    public $table = 'dietas';

    public $fillable = [
        'user_id'
    ];

    public static $rules = [
        '' => 'required',
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function semanas()
    {
        return $this->hasMany(Semana::class);
    }
}
