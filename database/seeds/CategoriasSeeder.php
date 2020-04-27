<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([

            ['nombre' => 'Charla', 'slug' => 'charla'],
            ['nombre' => 'Conferencia', 'slug' => 'conferencia'],
            ['nombre' => 'Curso', 'slug' => 'curso'],
            ['nombre' => 'Debate', 'slug' => 'debate'],
            ['nombre' => 'Demostración', 'slug' => 'demostracion'],
            ['nombre' => 'Congreso', 'slug' => 'congreso'],
            ['nombre' => 'Especialización', 'slug' => 'especializacion'],
            ['nombre' => 'Disertación', 'slug' => 'disertacion'],

        ]);
    }
}
