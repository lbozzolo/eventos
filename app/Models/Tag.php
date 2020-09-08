<?php

namespace Eventos\Models;

use Eventos\Models\Entity as Entity;

class Tag extends Entity
{
    public $table = 'tags';
    public $timestamps = false;

    public $fillable = [
        'name',
        'slug'
    ];

    public static $rules = [
        'name' => 'required|max:30'
    ];

    public function materiales()
    {
        return $this->belongsToMany(Material::class, 'tags_material', 'tag_id', 'material_id');
    }
}
