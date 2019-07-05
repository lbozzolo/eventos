<?php

namespace Kallfu\Http\Controllers;

use Kallfu\Http\Requests\CreateServiceRequest;
use Kallfu\Http\Requests\UpdateServiceRequest;
use Kallfu\Repositories\ServiceRepository;
use Kallfu\Http\Controllers\AppBaseController as AppBaseController;
use Kallfu\Traits\ImageTrait;

class ServiceController extends AppBaseController
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

    public function __construct(ServiceRepository $repository)
    {
        $this->repo = $repository;
        $this->gender = 'M';
        $this->model = 'service';
        $this->modelPlural = 'services';
        $this->modelSpanish = 'servicio';
        $this->modelSpanishPlural = 'servicios';
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
        $this->data['items'] = $this->repo->all();
        return view($this->modelPlural.'.index')->with($this->data);
    }

    public function store(CreateServiceRequest $request)
    {
        $ingrediente['name'] = strtolower($request->name);
        $ingrediente['description'] = ($request->description)? $request->description : null;
        $ingrediente['slug'] = str_slug($request->name, '-');

        $item = $this->repo->create($ingrediente);

        if (!$item)
            return redirect()->back()->withErrors($this->store_failure_message);

        if($request['image'])
            $this->storeImage($request['image'], $item->id, ucfirst($this->model));

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->store_success_message);
    }

    public function edit($id)
    {
        $this->data['items'] = $this->repo->all();
        $this->data['item'] = $this->repo->findWithoutFail($id);
        return view($this->modelPlural.'.edit')->with($this->data);
    }

    public function update(UpdateServiceRequest $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        $inputs = $request->except('image');

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

        $this->data['item'] = $this->repo->update($inputs, $id);

        if($request['image']){
            if($this->data['item']->mainImageThumb())
                $this->destroyImage($this->data['item']->mainImageThumb()->id);
            $this->storeImage($request['image'], $this->data['item']->id, ucfirst($this->model));
        }

        $this->data['item'] = $this->repo->findWithoutFail($id);
        $this->data['items'] = $this->repo->all();

        return redirect(route($this->modelPlural.'.index'))->with($this->data);
    }

    public function destroy($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->repo->delete($id);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->destroy_success_message);
    }


}