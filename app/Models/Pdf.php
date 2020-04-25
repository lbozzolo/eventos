<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Pdf extends Entity
{
    public $table = 'pdfs';

    public $fillable = [
        'title',
        'path',
        'proyecto_id'
    ];

    // Relationships

    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
