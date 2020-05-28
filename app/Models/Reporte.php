<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Reporte extends Entity
{
    public $table = 'reportes';
    public $timestamps = true;

    public $fillable = [
        'id',
        'proyecto_id',
        'cantidad_online',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
