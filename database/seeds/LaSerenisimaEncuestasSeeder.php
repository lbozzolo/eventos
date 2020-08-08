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

        $encuesta1 = \Eventos\Models\Encuesta::create([
            'nombre' => 'Trabajando en resilencia, el pasto como recurso',
            'proyecto_id' => 11,
        ]);

        $encuesta2 = \Eventos\Models\Encuesta::create([
            'nombre' => 'El manejo del agua, pilar de la producción lechera',
            'proyecto_id' => 11,
        ]);

        $encuesta3 = \Eventos\Models\Encuesta::create([
            'nombre' => 'El cambio climático impacta en nuestro rodeo',
            'proyecto_id' => 11,
        ]);

        // =======================================================================================
        //                                          ENCUESTA 1
        // =======================================================================================


        // Pregunta 1 - Encuesta 1

        $pregunta1 = \Eventos\Models\Pregunta::create([
            'descripcion' => 'Usted es...',
            'clase' => 1,
            'encuesta_id' => $encuesta1->id
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


        // Pregunta 2 - Encuesta 1

        $pregunta2 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto a organización?',
            'clase' => 1,
            'encuesta_id' => $encuesta1->id
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


        // Pregunta 3 - Encuesta 1

        $pregunta3 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto a temario?',
            'clase' => 1,
            'encuesta_id' => $encuesta1->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta3->id
            ]);
        }

        // Pregunta 4 - Encuesta 1

        $pregunta4 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto al manejo de los tiempos?',
            'clase' => 1,
            'encuesta_id' => $encuesta1->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta4->id
            ]);
        }


        // Pregunta 5 - Encuesta 1

        $pregunta5 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció el disertante José Jáuregui?',
            'clase' => 1,
            'encuesta_id' => $encuesta1->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta5->id
            ]);
        }

        // Pregunta 6 - Encuesta 1

        $pregunta6 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció el disertante Mariano Oyarzábal?',
            'clase' => 1,
            'encuesta_id' => $encuesta1->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta6->id
            ]);
        }

        // Pregunta 7 - Encuesta 1

        \Eventos\Models\Pregunta::create([
            'descripcion' => 'Comentarios',
            'clase' => 2,
            'encuesta_id' => $encuesta1->id
        ]);


        // =======================================================================================
        //                                          ENCUESTA 2
        // =======================================================================================

        // Pregunta 1 - Encuesta 2

        $pregunta1 = \Eventos\Models\Pregunta::create([
            'descripcion' => 'Usted es...',
            'clase' => 1,
            'encuesta_id' => $encuesta2->id
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


        // Pregunta 2 - Encuesta 2

        $pregunta2 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto a organización?',
            'clase' => 1,
            'encuesta_id' => $encuesta2->id
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


        // Pregunta 3 - Encuesta 2

        $pregunta3 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto a temario?',
            'clase' => 1,
            'encuesta_id' => $encuesta2->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta3->id
            ]);
        }

        // Pregunta 4 - Encuesta 2

        $pregunta4 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto al manejo de los tiempos?',
            'clase' => 1,
            'encuesta_id' => $encuesta2->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta4->id
            ]);
        }


        // Pregunta 5 - Encuesta 2

        $pregunta5 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció la disertante María Alejandra Herrero?',
            'clase' => 1,
            'encuesta_id' => $encuesta2->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta5->id
            ]);
        }

        // Pregunta 6 - Encuesta 2

        $pregunta6 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció el disertante Alejandro La Manna?',
            'clase' => 1,
            'encuesta_id' => $encuesta2->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta6->id
            ]);
        }

        // Pregunta 7 - Encuesta 2

        \Eventos\Models\Pregunta::create([
            'descripcion' => 'Comentarios',
            'clase' => 2,
            'encuesta_id' => $encuesta2->id
        ]);


        // =======================================================================================
        //                                          ENCUESTA 3
        // =======================================================================================

        // Pregunta 1 - Encuesta 3

        $pregunta1 = \Eventos\Models\Pregunta::create([
            'descripcion' => 'Usted es...',
            'clase' => 1,
            'encuesta_id' => $encuesta3->id
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


        // Pregunta 2 - Encuesta 3

        $pregunta2 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto a organización?',
            'clase' => 1,
            'encuesta_id' => $encuesta3->id
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


        // Pregunta 3 - Encuesta 3

        $pregunta3 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto a temario?',
            'clase' => 1,
            'encuesta_id' => $encuesta3->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta3->id
            ]);
        }

        // Pregunta 4 - Encuesta 3

        $pregunta4 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le merecieron las charlas de esta jornada en cuanto al manejo de los tiempos?',
            'clase' => 1,
            'encuesta_id' => $encuesta3->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta4->id
            ]);
        }


        // Pregunta 5 - Encuesta 3

        $pregunta5 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció el disertante Sebastián Vangelis?',
            'clase' => 1,
            'encuesta_id' => $encuesta3->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta5->id
            ]);
        }

        // Pregunta 6 - Encuesta 3

        $pregunta6 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció el disertante Lucio Carbone?',
            'clase' => 1,
            'encuesta_id' => $encuesta3->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta6->id
            ]);
        }

        // Pregunta 7 - Encuesta 3

        $pregunta7 = \Eventos\Models\Pregunta::create([
            'descripcion' => '¿Qué opinión le mereció la disertante Josefina Riestra?',
            'clase' => 1,
            'encuesta_id' => $encuesta3->id
        ]);

        foreach($opciones2 as $opcion){
            \Eventos\Models\Opcion::create([
                'descripcion' => $opcion['descripcion'],
                'opcion' => $opcion['opcion'],
                'pregunta_id' => $pregunta7->id
            ]);
        }

        // Pregunta 8 - Encuesta 3

        \Eventos\Models\Pregunta::create([
            'descripcion' => 'Comentarios',
            'clase' => 2,
            'encuesta_id' => $encuesta3->id
        ]);


    }
}
