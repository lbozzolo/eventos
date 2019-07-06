<?php

namespace Kallfu\Models;

use Kallfu\Models\Entity as Entity;

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
