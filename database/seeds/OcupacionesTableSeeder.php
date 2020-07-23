<?php

use Illuminate\Database\Seeder;

class OcupacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ocupaciones')->insert([
            [
                'nombre' => 'Productor',
                'slug' => 'productor'
            ],
            [
                'nombre' => 'Industrial',
                'slug' => 'industrial'
            ],
            [
                'nombre' => 'Técnico',
                'slug' => 'tecnico'
            ],
            [
                'nombre' => 'Docente',
                'slug' => 'docente'
            ],
            [
                'nombre' => 'Estudiante',
                'slug' => 'estudiante'
            ],
        ]);
    }
}
