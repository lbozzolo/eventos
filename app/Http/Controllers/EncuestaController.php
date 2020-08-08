<?php

namespace Eventos\Http\Controllers;

use Eventos\Http\Requests\CreateEncuestaRequest;
use Eventos\Http\Requests\UpdateEstadoRequest;
use Eventos\Models\Encuesta;
use Eventos\Models\Estado;
use Eventos\Models\Opcion;
use Eventos\Models\Pregunta;
use Eventos\Models\Proyecto;
use Eventos\Repositories\EncuestaRepository;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Illuminate\Http\Request;

class EncuestaController extends AppBaseController
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

    public function __construct(EncuestaRepository $repository)
    {
        $this->repo = $repository;
        $this->gender = 'F';
        $this->model = 'encuesta';
        $this->modelPlural = 'encuestas';
        $this->modelSpanish = 'encuesta';
        $this->modelSpanishPlural = 'encuestas';
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
        $this->data['items'] = Estado::all();
        return view($this->modelPlural.'.index')->with($this->data);
    }

    public function create($idProyecto)
    {
        $this->data['proyecto'] = Proyecto::find($idProyecto);
        return view($this->modelPlural.'.create')->with($this->data);
    }

    public function store(CreateEncuestaRequest $request, $idProyecto)
    {
        $this->data['proyecto'] = Proyecto::find($idProyecto);

        $input = $request->all();
        $input['proyecto_id'] = $idProyecto;
        $item = $this->repo->create($input);

        if (!$item)
            return redirect()->back()->withErrors($this->store_failure_message);

        return redirect()->back()->with('ok', $this->store_success_message);
    }

    public function show($id)
    {
        $this->data['item'] = $this->repo->findOrFail($id);

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

    public function update($id, UpdateEstadoRequest $request)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);
        $this->data['items'] = $this->repo->all();

        $inputs = $request->all();

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

        $this->data['item'] = $this->repo->update($inputs, $id);

        return redirect()->back()->with('ok', $this->update_success_message);
    }

    public function destroy($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->repo->delete($id);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->destroy_success_message);
    }

    public function respuestas($id)
    {
        $encuesta = Encuesta::find($id);

        $this->data['item'] = $encuesta;
        $this->data['answersByUser'] = $encuesta->respuestas->groupBy('user_id');
        $answersByQuestion = $encuesta->respuestas->groupBy('pregunta_id');

        foreach($answersByQuestion as $question => $answers){
            $pregunta = Pregunta::find($question);

            foreach($answers->groupBy('opcion_id') as $opcionId => $respuesta){
                $opcion = Opcion::find($opcionId);
                if($opcion){
                    $this->data['answersByQuestion'][$pregunta->descripcion][$opcion->descripcion] = $respuesta->count();
                } else {
                    $textos = $respuesta->map(function($item){
                        return $item->texto;
                    });
                    $this->data['answersByQuestion'][$pregunta->descripcion]['textos'] = $textos;
                }

            }
        }

        return view($this->modelPlural.'.respuestas')->with($this->data);
    }

}
