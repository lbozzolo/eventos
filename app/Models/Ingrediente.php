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

            switch ($this->medida()) {
                case "porción":
                    $medida = 'porciones.';
                    break;
                case "galón":
                    $medida = 'galones.';
                    break;
                default:
                    $medida = $this->medida().'s.';
            }

        } else {
            $medida = $this->medida().'.';
        }

        return $this->pivot->cantidad.' '.$medida;
    }

    protected function medida()
    {
        return config('sistema.medidas.'.$this->pivot->medida);
    }
}
