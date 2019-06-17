<?php

namespace KetoLife\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use KetoLife\Http\Requests\CreatePasoRequest;
use KetoLife\Http\Requests\UpdatePasoRequest;
use KetoLife\Http\Requests\UpdateRecetaRequest;
use KetoLife\Models\Receta;
use KetoLife\Repositories\PasoRepository;
use KetoLife\Http\Controllers\AppBaseController as AppBaseController;
use KetoLife\Traits\ImageTrait;

class PasoController extends AppBaseController
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

    public function __construct(PasoRepository $repository)
    {
        $this->repo = $repository;
        $this->gender = 'M';
        $this->model = 'paso';
        $this->modelPlural = 'pasos';
        $this->modelSpanish = 'paso';
        $this->modelSpanishPlural = 'pasos';
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

    public function indexTable()
    {
        $this->data['items'] = $this->repo->all();
        return view($this->modelPlural.'.index-table')->with($this->data);
    }

    public function create(Receta $receta)
    {
        $this->data['receta'] = $receta;
        return view($this->modelPlural.'.create')->with($this->data);
    }

    public function store(CreatePasoRequest $request, Receta $receta)
    {
        $input = $request->all();
        $paso = $this->repo->create($input);

        $this->data['receta'] = $receta->pasos()->save($paso);

        if (! $this->data['receta'])
            return redirect()->back()->withErrors($this->store_failure_message);

        return redirect()->back()->with(['ok' => $this->store_success_message, $this->data]);
//        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->store_success_message);
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

        $this->data['receta'] = $this->data['item']->receta;

        //dd($this->data['receta']);

        return view($this->modelPlural.'.edit')->with($this->data);
    }

    public function update($id, UpdatePasoRequest $request)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);
        $receta = $this->data['item']->receta;
        $this->data['item'] = $this->repo->update($request->all(), $id);

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

        return redirect()->route($this->modelPlural.'.create', $receta->id)->with('ok', $this->update_success_message);
    }

    public function destroy(Request $request, $id)
    {
        $receta = Receta::find($request->receta_id);

        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->repo->delete($id);
        $this->repo->orderPositions($receta->pasos);

        return redirect()->back();
    }

}
