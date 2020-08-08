<?php

namespace Eventos\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
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

    public function __construct()
    {
        $this->gender = 'M';
        $this->model = 'role';
        $this->modelPlural = 'roles';
        $this->modelSpanish = 'rol';
        $this->modelSpanishPlural = 'roles';
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
        $this->data['items'] = Role::where('name', '!=', 'Superadmin')->get();
        $this->data['roles'] = Role::pluck('name', 'id');
        $this->data['permissions'] = Permission::all();

        return view($this->modelPlural.'.index')->with($this->data);
    }

    public function create()
    {
        return view($this->modelPlural.'.create');
    }

    public function store(Request $request)
    {
        $name = ucfirst(strtolower($request->name));
        Role::create(['name' => $name]);
        return redirect()->route($this->modelPlural.'.index');
    }

    public function edit($id)
    {
        $this->data['item'] = Role::find($id);

        if(!$this->data['item'])
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.edit')->with($this->data);
    }

    public function update($id, Request $request)
    {
        $this->data['item'] = Role::find($id);

        if(!$this->data['item'])
            return redirect()->back()->withErrors($this->show_failure_message);

        $this->data['item']->name = ucfirst(strtolower($request->name));
        $this->data['item']->save();

        return redirect()->route($this->modelPlural.'.index')->with('ok', $this->update_success_message);
    }

    public function delete(Request $request, $id)
    {
        $this->data['item'] = Role::find($id);

        if(!$this->data['item'])
            return redirect()->back()->withErrors($this->show_failure_message);

        $this->data['item']->delete();

        return redirect()->route($this->modelPlural.'.index');
    }

    public function permissions(Request $request)
    {
        $role = Role::find($request->role_id);

        if(!$role)
            return redirect()->back()->withErrors('Debe seleccionar un rol');

        $role->syncPermissions($request->permissions);

        return redirect()->route($this->modelPlural.'.index')->with('ok', 'Permisos asignados con éxito');
    }

}
