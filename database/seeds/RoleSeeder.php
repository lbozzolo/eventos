<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lucas = \Eventos\User::where('email', 'lucas@verticedigital.com.ar')->first();
        $fernando = \Eventos\User::where('email', 'fernando@verticedigital.com.ar')->first();

        DB::table('roles')->insert([
            [
                'name' => 'Superadmin',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Cliente',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Inscripto',
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        ]);

        $lucas->assignRole('Superadmin');
        $fernando->assignRole('Superadmin');

        $roles = \Spatie\Permission\Models\Role::all();
        $permissions = [

            'Admin' => [
                'eliminar_estados', 'editar_proyectos', 'crear_categorias', 'mostrar_categorias', 'eliminar_clientes', 'eliminar_inscriptos',
                'editar_auspiciantes', 'crear_estados', 'mostrar_estados', 'eliminar_proyectos', 'editar_categorias', 'crear_clientes', 'mostrar_clientes',
                'crear_inscriptos', 'mostrar_inscriptos', 'eliminar_auspiciantes', 'mostrar_newsletter', 'editar_estados', 'crear_proyectos', 'mostrar_proyectos',
                'eliminar_categorias', 'editar_clientes', 'editar_inscriptos', 'crear_auspiciantes', 'mostrar_auspiciantes', 'cambiar_password'
            ],

            'Cliente' => [
                'mostrar_proyectos', 'mostrar_perfil_cliente', 'cambiar_password'
            ]

        ];

        foreach($roles as $role){

            if($role->name == 'Admin')
                $role->givePermissionTo($permissions['Admin']);

            if($role->name == 'Cliente')
                $role->givePermissionTo($permissions['Cliente']);

        }

    }
}
