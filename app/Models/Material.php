<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Material extends Entity
{
    public $table = 'material';
    public $timestamps = true;

    public $fillable = [
        'name',
        'nombre',
        'mime',
        'author',
        'area',
        'path',
        'proyecto_id',
        'comision_id',
    ];

    public static $rules = [
        'nombre' => 'required|max:191',
        'author' => 'max:191',
        'comision_id' => 'max: 200'
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_material', 'material_id', 'tag_id');
    }
}
