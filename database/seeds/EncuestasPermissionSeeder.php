<?php

use Illuminate\Database\Seeder;

class EncuestasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([

            // Encuestas

            [
                'name' => 'mostrar_encuestas',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'crear_encuestas',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],

            // Preguntas

            [
                'name' => 'crear_preguntas',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'mostrar_preguntas',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],

            // Respuestas

            [
                'name' => 'mostrar_respuestas',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],

        ]);
    }
}
