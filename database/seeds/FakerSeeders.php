<?php

use Illuminate\Database\Seeder;

class FakerSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categorias')->insert([
            [
                'nombre' => 'Categoría 1',
                'slug' => str_slug('Categoría 1'),
            ],
            [
                'nombre' => 'Categoría 2',
                'slug' => str_slug('Categoría 2'),
            ],
        ]);

        DB::table('clientes')->insert([
            ['nombre' => 'KWS'],
            ['nombre' => 'Cargrill'],
        ]);

        DB::table('proyectos')->insert([
            [
                'nombre' => 'Conferencia Rizoma',
                'descripcion' => 'You may also use the sync method to construct many-to-many associations.',
                'cliente_id' => 1,
                'estado_id' => 1,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Habilitación profesional',
                'descripcion' => 'The sync method accepts an array of IDs to place on the intermediate table. ',
                'cliente_id' => 2,
                'estado_id' => 2,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Responsabilidad Social',
                'descripcion' => 'The sync method accepts an array of IDs to place on the intermediate table. ',
                'cliente_id' => 1,
                'estado_id' => 1,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Seguimiento de Expedientes',
                'descripcion' => 'The sync method accepts an array of IDs to place on the intermediate table. ',
                'cliente_id' => 2,
                'estado_id' => 2,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Charla sobre temas menos importantes',
                'descripcion' => 'The sync method accepts an array of IDs to place on the intermediate table. ',
                'cliente_id' => 1,
                'estado_id' => 1,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Charla de contenido muy importante',
                'descripcion' => 'The sync method accepts an array of IDs to place on the intermediate table. ',
                'cliente_id' => 2,
                'estado_id' => 2,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Enseñanzas prácticas del siglo XXI',
                'descripcion' => 'The sync method accepts an array of IDs to place on the intermediate table. ',
                'cliente_id' => 1,
                'estado_id' => 1,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Ingerentes',
                'descripcion' => 'The sync method accepts an array of IDs to place on the intermediate table. ',
                'cliente_id' => 2,
                'estado_id' => 2,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Rizoma Group, aportes',
                'descripcion' => 'The sync method accepts an array of IDs to place on the intermediate table. ',
                'cliente_id' => 1,
                'estado_id' => 1,
                'fecha' => \Carbon\Carbon::tomorrow(),
                'publico' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],

        ]);

        $proyectos = \Eventos\Models\Proyecto::all();

        foreach($proyectos as $proyecto){
            $proyecto->categorias()->attach([rand(1,2)]);
            $proyecto->header()->create();
        }

    }
}
