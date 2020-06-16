<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;
use Eventos\User;

class Codigo extends Entity
{
    public $table = 'codigos';

    public $fillable = [
        'proyecto_id',
        'code'
    ];

    public static $rules = [
        'cantidad_codigos' => 'required|numeric|max:5000|min:1'
    ];

    public static $messages = [
        'cantidad_codigos.required' => 'Debe ingresar una cantidad mínima',
        'cantidad_codigos.numeric' => 'Debe ingresar un número',
        'cantidad_codigos.max' => 'No se permiten generar más de 5000 códigos',
        'cantidad_codigos.min' => 'No se permiten generar menos de 1 código',
    ];

    // Relationships
    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
