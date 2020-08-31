<?php

namespace Eventos\Http\Controllers;

use Eventos\Http\Requests\CreateGrupoRequest;
use Eventos\Models\Categoria;
use Eventos\Models\Grupo;
use Eventos\Models\Proyecto;
use Eventos\Repositories\GrupoRepository;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Http\Request;
use Eventos\Traits\ImageTrait;


class GrupoController extends AppBaseController
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

    use ImageTrait;

    public function __construct(GrupoRepository $repository)
    {
        $this->repo = $repository;
        $this->gender = 'M';
        $this->model = 'grupo';
        $this->modelPlural = 'grupos';
        $this->modelSpanish = 'grupo';
        $this->modelSpanishPlural = 'grupos';
        $this->store_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' creado con éxito' : ucfirst($this->modelSpanish).' creada con éxito';
        $this->store_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo crear el '.ucfirst($this->modelSpanish) : 'Ocurrió un error. No se pudo crear la'.ucfirst($this->modelSpanish);
        $this->show_failure_message = ($this->gender == 'M')? 'No se encontró el '.ucfirst($this->modelSpanish.' especificado') : 'No se encontró la'.ucfirst($this->modelSpanish.' especificada');
        $this->update_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' actualizado con éxito' : ucfirst($this->modelSpanish).' actualizada con éxito';
        $this->update_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo actualizar el '.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo actualizar la'.ucfirst($this->modelSpanish).' especificada';
        $this->destroy_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' eliminado con éxito' : ucfirst($this->modelSpanish).' eliminada con éxito';
        $this->destroy_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo eliminar el '.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo eliminar la'.ucfirst($this->modelSpanish).' especificada';
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
        $this->data['items'] = Grupo::orderBy('id', 'desc')->paginate(10);
        return view($this->modelPlural.'.index')->with($this->data);
    }

    public function create()
    {
        $this->data['categorias'] = Categoria::pluck('nombre', 'id');
        return view($this->modelPlural.'.create')->with($this->data);
    }

    public function store(CreateGrupoRequest $request)
    {
        $grupo = Grupo::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'categoria_id' => $request['categoria_id']
        ]);

        return redirect()->route($this->modelPlural.'.edit', $grupo->id)->with($this->data)->with('ok', $this->store_success_message);
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
        $this->data['item'] = Grupo::findorfail($id);
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');

        return view($this->modelPlural.'.edit')->with($this->data);
    }

    public function update($id, Request $request)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);
        $proyectos = $request['proyectos'];

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

        $this->data['item']->nombre = $request['nombre'];
        $this->data['item']->descripcion = $request['descripcion'];
        $this->data['item']->save();
        $this->data['item']->proyectos()->sync($proyectos);

        return redirect()->route($this->modelPlural.'.index')->with('ok', $this->update_success_message);
    }

    public function destroy($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->repo->delete($id);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->destroy_success_message);
    }

    public function imagenes($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.images')->with($this->data);
    }

}
