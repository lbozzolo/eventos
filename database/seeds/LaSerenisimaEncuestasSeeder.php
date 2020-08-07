<?php

use Illuminate\Database\Seeder;

class LaSerenisimaEncuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $encuesta = \Eventos\Models\Encuesta::create([
            'nombre' => 'Trabajando en resilencia, el pasto como recurso',
            'proyecto_id' => 11,
        ]);

        // Pregunta 1

        $pregunta1 = \Eventos\Models\Pregunta::create([
            'descripcion' => 'Usted es...',
            'clase' => 1,
            'encuesta_id' => $encuesta->id
        ]);

        $opciones1 = [
            ['descripcion' => 'Productor', 'opcion' => 'a'],
            ['descripcion' => 'Asesor', 'opcion' => 'b'],
            ['descripcion' => 'Personal', 'opcion' => 'c'],
            ['descripcion' => 'Estudiante', 'opcion' => 'd'],
            ['descripcion' => 'Prensa', 'opcion' => 'e'],
            ['descripcion' => 'Otro', 'opcion' => 'f'],
        ];

        foreach($opciones1 as $opcion){

            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta1->id
            ]);
        }


        // Pregunta 2

        $pregunta2 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto a organización?',
            'clase' => 1,
            'encuesta_id' => $encuesta->id
        ]);

        $opciones2 = [
            ['descripcion' => 'Muy buena', 'opcion' => 'a'],
            ['descripcion' => 'Buena', 'opcion' => 'b'],
            ['descripcion' => 'Regular', 'opcion' => 'c'],
            ['descripcion' => 'Mala', 'opcion' => 'd'],
        ];

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta2->id
            ]);
        }


        // Pregunta 3

        $pregunta3 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto a temario?',
            'clase' => 1,
            'encuesta_id' => $encuesta->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta3->id
            ]);
        }

        // Pregunta 4

        $pregunta4 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto al manejo de los tiempos?',
            'clase' => 1,
            'encuesta_id' => $encuesta->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta4->id
            ]);
        }


        // Pregunta 5

        $pregunta5 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció el disertante José Jáuregui?',
            'clase' => 1,
            'encuesta_id' => $encuesta->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta5->id
            ]);
        }

        // Pregunta 6

        $pregunta6 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció el disertante Mariano Oyarzábal?',
            'clase' => 1,
            'encuesta_id' => $encuesta->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta6->id
            ]);
        }

        // Pregunta 7

        \Eventos\Models\Pregunta::create([
            'descripcion' => 'Comentarios',
            'clase' => 2,
            'encuesta_id' => $encuesta->id
        ]);


    }
}
