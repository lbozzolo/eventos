<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Newsletter extends Entity
{
    public $table = 'newsletter';

    public $fillable = [
        'email',
    ];

    public static $rules = [
        'email' => 'required|email',
    ];

}
