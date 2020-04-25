<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar directorio de imágenes
        exec("rm -R public/imagenes/*");

        $this->call(UsersTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(EstadosSeeder::class);
        $this->call(AuspiciantesSeeder::class);
        //$this->call(FakerSeeders::class);
    }
}
