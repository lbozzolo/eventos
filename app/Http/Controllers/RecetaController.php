<?php

namespace KetoLife\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use KetoLife\Http\Requests\AgregarIngredientesRequest;
use KetoLife\Http\Requests\CreateRecetaRequest;
use KetoLife\Http\Requests\UpdateRecetaRequest;
use Intervention\Image\Facades\Image as Intervention;
use KetoLife\Models\Ingrediente;
use KetoLife\Models\Receta;
use KetoLife\Repositories\RecetaRepository;
use KetoLife\Http\Controllers\AppBaseController as AppBaseController;
use KetoLife\Traits\ImageTrait;

class RecetaController extends AppBaseController
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

    public function __construct(RecetaRepository $repository)
    {
        $this->repo = $repository;
        $this->gender = 'F';
        $this->model = 'receta';
        $this->modelPlural = 'recetas';
        $this->modelSpanish = 'receta';
        $this->modelSpanishPlural = 'recetas';
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

    public function create()
    {
        $this->data['current_date'] = Carbon::today()->month.'-'.Carbon::now()->year;
        return view($this->modelPlural.'.create')->with($this->data);
    }

    public function store(CreateRecetaRequest $request)
    {
        $input = $request->except(['img']);
        $item = $this->repo->create($input);

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

        return view($this->modelPlural.'.edit')->with($this->data);
    }

    public function update($id, UpdateRecetaRequest $request)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);
        $this->data['items'] = $this->repo->all();

        $inputs = $request->all();

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

        $this->data['item'] = $this->repo->update($inputs, $id);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->update_success_message);
    }

    public function createIngredientes(Receta $receta)
    {
        $this->data['receta'] = $receta;
        $this->data['ingredientes'] = Ingrediente::pluck('nombre', 'id');
        $this->data['medidas'] = config('sistema.medidas');
        return view($this->modelPlural.'.crear-ingrediente')->with($this->data);
    }

    public function storeIngredientes(AgregarIngredientesRequest $request, Receta $receta)
    {
        dd($receta);
    }

    public function destroy($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->repo->delete($id);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->destroy_success_message);
    }

    public function deleteCover(Request $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->show_failure_message);

        File::delete(storage_path("app/covers/".$this->data['item']->url_cover));

        $this->data['item']->url_cover = null;
        $this->data['item']->save();

        return redirect(route($this->modelPlural.'.edit', $this->data['item']->id));
    }

    public function deletePdf($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->show_failure_message);

        File::delete(storage_path("app/".$this->data['item']->url_pdf));

        $this->data['item']->url_pdf = null;
        $this->data['item']->save();

        return redirect(route($this->modelPlural.'.edit', $this->data['item']->id));
    }


}
