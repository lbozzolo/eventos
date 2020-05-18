<?php

namespace Eventos\Http\Controllers;

use Eventos\Models\Header;
use Eventos\Repositories\ClienteRepository;
use Eventos\Repositories\ProyectoRepository;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Eventos\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image as Intervention;
use Eventos\Models\Image;


class HeaderController extends AppBaseController
{
    private $repo;
    private $gender;
    private $model;
    private $modelSpanish;
    private $modelSpanishPlural;
    private $modelPlural;
    private $store_success_message;
    private $store_failure_message;
    private $show_failure_message;
    private $update_success_message;
    private $update_failure_message;
    private $destroy_success_message;
    private $destroy_failure_message;
    private $no_results_message;
    private $data;
    private $clienteRepo;

    use ImageTrait;

    public function __construct(ProyectoRepository $repository, ClienteRepository $clienteRepo)
    {
        $this->repo = $repository;
        $this->clienteRepo = $clienteRepo;
        $this->gender = 'M';
        $this->model = 'header';
        $this->modelPlural = 'headers';
        $this->modelSpanish = 'header';
        $this->modelSpanishPlural = 'headers';
        $this->store_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' creado con éxito' : ucfirst($this->modelSpanish).' creada con éxito';
        $this->store_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo crear el'.ucfirst($this->modelSpanish) : 'Ocurrió un error. No se pudo crear la'.ucfirst($this->modelSpanish);
        $this->show_failure_message = ($this->gender == 'M')? 'No se encontró el'.ucfirst($this->modelSpanish.' especificado') : 'No se encontró la'.ucfirst($this->modelSpanish.' especificada');
        $this->update_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' actualizado con éxito' : ucfirst($this->modelSpanish).' actualizada con éxito';
        $this->update_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo actualizar el'.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo actualizar la'.ucfirst($this->modelSpanish).' especificada';
        $this->destroy_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' eliminado con éxito' : ucfirst($this->modelSpanish).' eliminada con éxito';
        $this->destroy_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo eliminar el'.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo eliminar la'.ucfirst($this->modelSpanish).' especificada';
        $this->no_results_message = ($this->gender == 'M')? 'No hay ningún '.$this->modelSpanish. ' cargado en el sistema.' : 'No hay ninguna '. $this->modelSpanish . ' cargada en el sistema.';

        $this->data['model'] = $this->model;
        $this->data['gender'] = $this->gender;
        $this->data['modelPlural'] = $this->modelPlural;
        $this->data['modelSpanish'] = $this->modelSpanish;
        $this->data['modelSpanishPlural'] = $this->modelSpanishPlural;
        $this->data['noResultsMessage'] = $this->no_results_message;
    }

    public function show($id)
    {
        $this->data['item'] = Header::find($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.show')->with($this->data);
    }

    public function edit($id)
    {
        return redirect()->back();
    }

    public function subirImagen(Request $request, $id)
    {

        $validator = Validator::make($request->all(), ['img' => 'required|image|max:1024000']);

        if ($validator->fails())
            return $validator->errors();


        if(!$request->hasFile('img'))
            return redirect()->back()->withErrors('No ha seleccionado ningún archivo');


        // Resize to image thumbnail
        $img_thumb = Intervention::make($request->file('img'))->resize(config('sistema.imagenes.WIDTH_THUMB'), config('sistema.imagenes.HEIGHT_THUMB'));

        if($request->file('img')){

            $file = $request->file('img');

            // Redirección si excede el máximo tamaño de imagen permitido
            if($file->getClientSize() > config('sistema.imagenes.MAX_SIZE_IMAGE'))
                return redirect()->back()->withErrors('La foto es demasiado grande (Debe ser menor a 5M)');

            // Confirma que el archivo no exista en el destino
            $nombre = $this->changeFileNameIfExists($file);

            $imagenInt = Intervention::make($request->file('img'))->encode('jpg', 100);

            $imagenInt->save(public_path('/imagenes/'). $nombre);
            $imagen = Image::create(['path' => $nombre, 'main' => 0]);

            $header = Header::find($id);
            $header->images()->save($imagen);

            $image_thumb = $this->makeThumb($img_thumb, $nombre, $header);
            $imagen->thumbnail_id = $image_thumb->id;

            $imagen->save();

        }

        return redirect()->back()->with('ok', 'Imagen subida con éxito');
    }

    public function changeFileNameIfExists($file)
    {
        $regEx = '/\\.[^.\\s]{3,4}$/';
        $string_random = str_random(28);

        $originalName = $file->getClientOriginalName();
        $extension = $file->guessExtension();

        $nombre = preg_replace($regEx, '', $originalName) . '-' . $string_random . '.' . $extension;
        $nombre = str_replace(' ','',$nombre);
        $nombre = str_replace_array('#', ['x'], $nombre);
        $nombre = strtolower($nombre);

        return $nombre;
    }

}
