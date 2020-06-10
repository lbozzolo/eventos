<?php

use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            [
                'nombre' => 'Público',
                'slug' => 'publico'
            ],
            [
                'nombre' => 'Privado',
                'slug' => 'privado'
            ],
            [
                'nombre' => 'Pago',
                'slug' => 'pago'
            ],
        ]);
    }
}
