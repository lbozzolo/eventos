<?php

use Illuminate\Database\Seeder;

class OcupacionesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([

            [
                'name' => 'mostrar_ocupaciones',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'crear_ocupaciones',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'editar_ocupaciones',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'eliminar_ocupaciones',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],

        ]);
    }
}
