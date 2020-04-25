<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            [
                'nombre' => 'Activo',
                'slug' => 'activo'
            ],
            [
                'nombre' => 'Inactivo',
                'slug' => 'inactivo'
            ],
        ]);

    }
}
