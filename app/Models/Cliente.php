<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;
use Eventos\User;

class Cliente extends Entity
{
    public $table = 'clientes';

    public $image_croppie_width = 450;
    public $image_croppie_height = 180;

    public $fillable = [
        'nombre',
        'user_id'
    ];

    public static $rules = [
        'nombre' => 'required',
        'name' => 'required',
        'lastname' => 'required',
        'email' => 'required|unique:users,email|email',
    ];

    // Relationships
    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
