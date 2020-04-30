<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entities = ['usuarios', 'estados', 'proyectos', 'categorias', 'clientes', 'roles', 'permisos', 'inscriptos', 'auspiciantes'];
        $actions = ['crear', 'editar', 'eliminar', 'mostrar'];

        foreach($entities as $entity){
            foreach($actions as $action){
                DB::table('permissions')->insert([
                    'name' => $action.'_'.$entity,
                    'guard_name' => 'web',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]);
            }
        }

        DB::table('permissions')->insert([
            [
                'name' => 'asignar_roles',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'quitar_roles',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'asignar_permisos',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'habilitar_usuarios',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'deshabilitar_usuarios',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'listar_usuarios_deshabilitados',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'mostrar_perfil_cliente',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'mostrar_newsletter',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'cambiar_password',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);

    }
}
