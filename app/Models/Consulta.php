<?php

namespace Eventos\Models;

use Carbon\Carbon;
use Eventos\Models\Entity as Entity;

class Consulta extends Entity
{
    public $table = 'consultas';

    public $fillable = [
        'proyecto_id',
        'nombre',
        'texto',
        'ip_address',
        'archivado',
    ];

    public static $rules = [
        'nombre' => 'max:191',
        'texto' => 'max:255'
    ];

    // Scopes
    public function scopeLastMessages($query, $interval)
    {
        return $query->where('created_at', '>=', Carbon::now()->subMinutes($interval)->toDateTimeString());
    }

    // Relationships
    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class);
    }

}
