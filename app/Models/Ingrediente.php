<?php

namespace KetoLife\Models;

use KetoLife\Models\Entity as Entity;

class Ingrediente extends Entity
{
    public $table = 'ingredientes';
    public $timestamps = false;

    public $fillable = [
        'nombre',
    ];

    public static $rules = [
        'nombre' => 'required',
    ];

    public function getNombreAttribute()
    {
        return ucfirst($this->attributes['nombre']);
    }

    public function getCantidadMedidaAttribute()
    {
        if($this->pivot->cantidad > 1){
            if(config('sistema.medidas.'.$this->pivot->medida) == 'porción'){
                $medida = 'porciones.';
            } else {
                $medida = config('sistema.medidas.'.$this->pivot->medida).'s.';
            }
        } else {
            $medida = config('sistema.medidas.'.$this->pivot->medida).'.';
        }

        return $this->pivot->cantidad.' '.$medida;
    }
}
