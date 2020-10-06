<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Link extends Entity
{
    public $table = 'links';

    public $fillable = [
        'nombre',
        'url',
        'proyecto_id',
        'iframe_id',
    ];

    public static $rules = [
        'url' => 'required|max:255'
    ];

    public static $messages = [
        'url.required' => 'La URL es obligatoria',
        'url.max' => 'La URL no puede exceder los 255 caracteres',
    ];

    public function getUrlLinkAttribute()
    {
        return $this->attributes['url'];
    }

    // Relationships
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function iframe()
    {
        return $this->belongsTo(Iframe::class);
    }

}
