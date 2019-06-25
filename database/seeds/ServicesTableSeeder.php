<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Desayuno Buffet',
                'description' => 'Servido a la mesa en el momento y en nuestro comedor o al aire libre: Variedades de dulces caseros.',
                'slug' => 'desayuno-buffet',
            ],
            [
                'name' => 'Pileta Climatizada',
                'description' => 'Contamos con una piscina climatizadas: Indoor y Outdoor, para disfrutar ambas temporadas.',
                'slug' => 'pileta-climatizada',
            ],
            [
                'name' => 'Jacuzzi',
                'description' => 'Armonía y libertad en su forma original, solo para que el cliente pueda relajarse y disfrutar.',
                'slug' => 'jacuzzi',
            ],
            [
                'name' => 'Restaurant',
                'description' => 'El restaurant ofrece un interesante menú regional. Intentaremos cautivar tus sentidos desde los clásicos sabores.',
                'slug' => 'restaurant',
            ],
            [
                'name' => 'Wi-fi',
                'description' => 'Contamos con conexión WI-FI en todas nuestras instalaciones.',
                'slug' => 'wi-fi',
            ],
            [
                'name' => 'Sauna',
                'description' => 'El sector de descanso, en el deck interior, el huésped podrá relajarse y descansar.',
                'slug' => 'sauna',
            ],
            [
                'name' => 'LCD TV',
                'description' => 'Calidad de imagen para poder disfrutar como si estuvieras en vivo y en directo todos los canales de tv.',
                'slug' => 'lcd-tv',
            ],
            [
                'name' => 'Sala de Estar',
                'description' => 'Disfrute de un espacio comodo y tranquilo, para lectura y entretenimiento.',
                'slug' => 'sala-de-estar',
            ],
        ]);
    }
}
