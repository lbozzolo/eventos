<?php

namespace Eventos\Http\Controllers;

use Eventos\Http\Requests\CreateOcupacionRequest;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Eventos\Models\Ocupacion;
use Eventos\Repositories\OcupacionRepository;
use Illuminate\Http\Request;

class OcupacionController extends AppBaseController
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

    public function __construct(OcupacionRepository $repository)
    {
        $this->repo = $repository;
        $this->gender = 'F';
        $this->model = 'ocupacion';
        $this->modelPlural = 'ocupaciones';
        $this->modelSpanish = 'ocupación';
        $this->modelSpanishPlural = 'ocupaciones';
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
        $this->data['items'] = Ocupacion::all();
        return view($this->modelPlural.'.index')->with($this->data);
    }

    public function store(CreateOcupacionRequest $request)
    {
        $inputs = $request->all();
        $inputs['slug'] = str_slug($inputs['nombre']);
        $item = $this->repo->create($inputs);

        if (!$item)
            return redirect()->back()->withErrors($this->store_failure_message);

        return redirect()->back();
    }

    public function update($id, CreateOcupacionRequest $request)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);
        $this->data['items'] = $this->repo->all();

        $inputs = $request->all();
        $inputs['slug'] = str_slug($inputs['nombre']);

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

        $this->data['item'] = $this->repo->update($inputs, $id);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->update_success_message);
    }

    public function destroy(Request $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->repo->delete($id);

        return redirect()->back()->with('ok', $this->destroy_success_message);
    }

}
