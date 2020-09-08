<?php

namespace Eventos\Http\Controllers;

use Eventos\Http\Requests\UpdateMaterialRequest;
use Eventos\Models\Material;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Eventos\Models\Tag;
use Eventos\Repositories\MaterialRepository;
use Illuminate\Http\Request;

class MaterialController extends AppBaseController
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

    public function __construct(MaterialRepository $repository)
    {
        $this->repo = $repository;
        $this->gender = 'M';
        $this->model = 'material';
        $this->modelPlural = 'material';
        $this->modelSpanish = 'material';
        $this->modelSpanishPlural = 'material';
        $this->store_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' creado con éxito' : ucfirst($this->modelSpanish).' creada con éxito';
        $this->store_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo crear el'.ucfirst($this->modelSpanish) : 'Ocurrió un error. No se pudo crear la'.ucfirst($this->modelSpanish);
        $this->show_failure_message = ($this->gender == 'M')? 'No se encontró el'.ucfirst($this->modelSpanish.' especificado') : 'No se encontró la'.ucfirst($this->modelSpanish.' especificada');
        $this->update_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' actualizado con éxito' : ucfirst($this->modelSpanish).' actualizada con éxito';
        $this->update_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo actualizar el'.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo actualizar la '.ucfirst($this->modelSpanish).' especificada';
        $this->destroy_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' eliminado con éxito' : ucfirst($this->modelSpanish).' eliminada con éxito';
        $this->destroy_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo eliminar el'.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo eliminar la '.ucfirst($this->modelSpanish).' especificada';
        $this->no_results_message = ($this->gender == 'M')? 'No hay ningún '.$this->modelSpanish. ' cargado en el sistema.' : 'No hay ninguna '. $this->modelSpanish . ' cargada en el sistema.';

        $this->data['model'] = $this->model;
        $this->data['gender'] = $this->gender;
        $this->data['modelPlural'] = $this->modelPlural;
        $this->data['modelSpanish'] = $this->modelSpanish;
        $this->data['modelSpanishPlural'] = $this->modelSpanishPlural;
        $this->data['noResultsMessage'] = $this->no_results_message;
    }

    public function update($id, UpdateMaterialRequest $request)
    {
        $this->data['item'] = Material::find($id);
        $this->data['items'] = $this->repo->all();

        $inputs = $request->except('tags');

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

//        dd($request['tags']);

        $tags = [];

        if(isset($request['tags'])){
            foreach($request['tags'] as $key => $tagName){

                $tagSlug = str_slug($tagName, '-');

                if(Tag::find($tagName)){
                    $checkIfExist = Tag::find($tagName);
                    if($checkIfExist)
                        $tag = $checkIfExist;
                } else {
                    $checkIfExist = Tag::where('slug', $tagSlug)->first();
                    $tag = ($checkIfExist)? $checkIfExist : Tag::create(['name' => $tagName, 'slug' => $tagSlug]);
                }

                array_push($tags, $tag->id);

            }

            $this->data['item']->tags()->sync($tags);
        }

        $this->data['item'] = $this->repo->update($inputs, $id);

        return redirect()->back()->with('ok', $this->update_success_message);
    }

    public function verPdf(Material $file)
    {
        return response()->make(\Illuminate\Support\Facades\File::get(storage_path("app/".$file->path.$file->name)),200)
            ->header('Content-Type', 'application/pdf');
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
