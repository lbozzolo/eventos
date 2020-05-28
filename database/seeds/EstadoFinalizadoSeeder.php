<?php

use Illuminate\Database\Seeder;

class EstadoFinalizadoSeeder extends Seeder
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
                'nombre' => 'Finalizado',
                'slug' => 'finalizado'
            ]
        ]);
    }
}
