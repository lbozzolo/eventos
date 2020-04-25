<?php

namespace Eventos\Http\Controllers;

use Carbon\Carbon;
use Eventos\Http\Requests\CreateProyectoRequest;
use Eventos\Http\Requests\UpdateProyectoRequest;
use Eventos\Models\Auspiciante;
use Eventos\Models\Categoria;
use Eventos\Models\Cliente;
use Eventos\Models\Estado;
use Eventos\Models\Header;
use Eventos\Models\Iframe;
use Eventos\Models\Pdf;
use Eventos\Models\Proyecto;
use Eventos\Models\Video;
use Eventos\Repositories\ClienteRepository;
use Eventos\Repositories\ProyectoRepository;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Eventos\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProyectoController extends AppBaseController
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
        $this->model = 'proyecto';
        $this->modelPlural = 'proyectos';
        $this->modelSpanish = 'proyecto';
        $this->modelSpanishPlural = 'proyectos';
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

    public function index()
    {
        $this->data['items'] = Proyecto::all()->sortByDesc('id');
        return view($this->modelPlural.'.index')->with($this->data);
    }

    public function create()
    {
        $this->data['estados'] = Estado::pluck('nombre', 'id');
        $this->data['categorias'] = Categoria::pluck('nombre', 'id');
        $this->data['clientes'] = Cliente::pluck('nombre', 'id');
        $this->data['auspiciantes'] = Auspiciante::pluck('nombre', 'id');
//        $this->data['clientes'] = $this->clienteRepo->pluckClientes();

        return view($this->modelPlural.'.create')->with($this->data);
    }

    public function store(CreateProyectoRequest $request)
    {
        $input = $request->all();

        $input['fecha'] = Carbon::parse($input['fecha'])->format('Y-m-d h:i');
//        dd($input);
        $item = $this->repo->create($input);
        $item->header()->create();

        if (!$item)
            return redirect()->back()->withErrors($this->store_failure_message);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->store_success_message);
    }

    public function show($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.show')->with($this->data);
    }

    public function edit($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        $this->data['estados'] = Estado::pluck('nombre', 'id');
        $this->data['categorias'] = Categoria::pluck('nombre', 'id');
        $this->data['clientes'] = Cliente::pluck('nombre', 'id');
        $this->data['auspiciantes'] = Auspiciante::pluck('nombre', 'id');

        return view($this->modelPlural.'.edit')->with($this->data);
    }

    public function update($id, UpdateProyectoRequest $request)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);
        $this->data['items'] = $this->repo->all();

        $inputs = $request->all();
        $inputs['fecha'] = Carbon::parse($inputs['fecha'])->format('Y-m-d h:i');

        if(!isset($inputs['publico']))
            $inputs['publico'] = null;

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

        $this->data['item'] = $this->repo->update($inputs, $id);

        if($this->data['item']->principal == 1){
            $proyectos = Proyecto::all()->except($this->data['item']->id);
            foreach($proyectos as $proyecto){
                $proyecto->principal = 0;
                $proyecto->save();
            }
        }

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->update_success_message);
    }

    public function imagenes($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.images')->with($this->data);
    }

    public function iframes($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.iframes')->with($this->data);
    }

    public function storeIframes(Request $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        if(!$request['path'])
            return redirect()->back()->withErrors('El campo URL está vacío');

        $inputs = $request->except('_token');
        $inputs['proyecto_id'] = $id;

        $iframe = Iframe::create($inputs);

        if(!$iframe)
            return redirect()->back()->withErrors('Ocurrió un error. No se pudo guardar el link del video');

        return redirect()->back()->with('ok', 'iframe guardado con éxito');
    }

    public function videos($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.videos')->with($this->data);
    }

    public function storeVideos(Request $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        if(!$request['path'])
            return redirect()->back()->withErrors('El campo URL está vacío');

        $inputs = $request->except('_token');
        $inputs['proyecto_id'] = $id;

        $iframe = Video::create($inputs);

        if(!$iframe)
            return redirect()->back()->withErrors('Ocurrió un error. No se pudo guardar el link del video');

        return redirect()->back()->with('ok', 'Video guardado con éxito');
    }

    public function pdfs($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.pdfs')->with($this->data);
    }

    public function storePDF(Request $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        if(!$request->file('url_pdf'))
            return redirect()->back()->withErrors('Debe seleccionar un archivo PDF');

        if($request->file('url_pdf')){

            $file = $request->file('url_pdf');
            $nombre = $this->changeFileNameIfExists($file);

            Storage::disk('public_pdf')->put($nombre,  File::get($file));

            $title = strtolower(str_slug($this->data['item']->nombre.'_pdf_'.($this->data['item']->pdfs->count() + 1)));

            $pdf = Pdf::create([
                'title' => $title,
                'path' => $nombre
            ]);

            $this->data['item']->pdfs()->save($pdf);
        }

        return redirect()->back()->with('ok', 'PDF guardado con éxito');
    }

    public function inscripciones($id)
    {
        $proyecto = Proyecto::find($id);
        $this->data['items'] =  $proyecto->inscriptos;
        $this->data['proyectoActual'] = $proyecto->nombre;
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');

        return view('users.inscripciones')->with($this->data);
    }

    public function destroy($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->repo->delete($id);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->destroy_success_message);
    }

    public function destroyIframe($proyecto, $iframe)
    {
        $this->data['proyecto'] = Proyecto::find($proyecto);
        $this->data['iframe'] = Iframe::find($iframe);

        if (empty($this->data['proyecto']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->data['iframe']->delete();

        return redirect(route($this->modelPlural.'.iframes', $proyecto))->with('ok', 'Iframe eliminado con éxito');
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
