<?php

use Illuminate\Database\Seeder;
use Intervention\Image\Facades\Image as Intervention;

class AuspiciantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auspiciantes')->insert([
            [
                'nombre' => 'Aguas Argentinas',
                'url' => 'https://www.aysa.com.ar/'
            ],
            [
                'nombre' => 'Aapresid',
                'url' => 'https://www.aapresid.org.ar/'
            ],
            [
                'nombre' => 'Claas',
                'url' => 'https://www.claas.com.ar/'
            ],
            [
                'nombre' => 'KWS',
                'url' => 'https://www.kws.com/ar/es/'
            ],
            [
                'nombre' => 'Pampero',
                'url' => 'http://www.pampero-online.com.ar/'
            ],
            [
                'nombre' => 'Valmont', 'url' => ''
            ],
            [
                'nombre' => 'Ministerio de Agricultura, Ganadería y Pesca de La Nación',
                'url' => 'https://www.argentina.gob.ar/agricultura-ganaderia-y-pesca'
            ],
            [
                'nombre' => 'Eventum',
                'url' => 'http://eventum.com.ar'
            ]
        ]);

        $auspiciantes = \Eventos\Models\Auspiciante::all();

        foreach($auspiciantes as $auspiciante){

            $nombre = str_slug($auspiciante->nombre).'.jpg';
            $sourceFilePath = public_path()."/images/logos/auspiciantes/".$nombre;
            $destinationPath = public_path()."/imagenes/".$nombre;
            \File::copy($sourceFilePath,$destinationPath);

            $imagen = \Eventos\Models\Image::create(['path' => $nombre, 'main' => 0]);
            $imagen->title = 'Logo de '.$auspiciante->nombre;
            $auspiciante->images()->save($imagen);

            $img_thumb = Intervention::make($destinationPath)->resize(config('sistema.imagenes.WIDTH_THUMB'), config('sistema.imagenes.HEIGHT_THUMB'));

            $image_thumb = $this->makeThumb($img_thumb, $nombre, $auspiciante, null);
            $imagen->thumbnail_id = $image_thumb->id;
            $image_thumb->title = 'Logo de '.$auspiciante->nombre;
            $image_thumb->save();
            $imagen->save();
        }


    }

    public function makeThumb($img, $name, $model = null, $type = null)
    {
        $img->save(public_path('/imagenes/'). 'thumb-'.$name);
        $image_thumb = \Eventos\Models\Image::create(['path' => 'thumb-'.$name, 'main' => 0, 'type' => $type ]);

        if($model)
            $model->images()->save($image_thumb);

        return $image_thumb;
    }

}
