<?php

namespace Eventos\Repositories;

use Eventos\Models\Cliente;
use InfyOm\Generator\Common\BaseRepository;

class ClienteRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Cliente::class;
    }

    public function pluckClientes()
    {
        $clientes = Cliente::all()->toArray();
        $result = [];

        for($i = 0; $i < count($clientes); $i++){
            $result[$clientes[$i]['id']] = $clientes[$i]['nombre'].' '.$clientes[$i]['apellido'];
        }

        return $result;
    }

}
