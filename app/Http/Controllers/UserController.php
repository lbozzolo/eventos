<?php

namespace Eventos\Http\Controllers;

use Eventos\Http\Requests\ChangePasswordRequest;
use Eventos\Http\Requests\CreateInscriptoRequest;
use Eventos\Http\Requests\CreateUserRequest;
use Eventos\Http\Requests\UpdateInscriptoRequest;
use Eventos\Http\Requests\UpdateUserRequest;
use Eventos\Models\Proyecto;
use Eventos\Repositories\UserRepository;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Eventos\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends AppBaseController
{
    private $userRepository;
    public $data;
    public $paises = ['Argentina', 'Bolivia', 'Brasil', 'Chile', 'Ecuador', 'Paraguay', 'Uruguay'];

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->all();
        $roles = $this->userRepository->getRolesExceptSuperadmin(Auth::user());

        return view('users.index')->with(['users' => $users, 'roles' => $roles]);
    }

    public function inscripciones()
    {
        $this->data['items'] = User::role('Inscripto')->get();
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');
        return view('users.inscripciones')->with($this->data);
    }

    public function inscripcionesBuscar(Request $request)
    {
        //dd($request->all());
        $proyecto = Proyecto::find($request['proyecto_id']);
        $this->data['items'] =  $proyecto->inscriptos;
        $this->data['proyectoActual'] = $proyecto->nombre;
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');

        return view('users.inscripciones')->with($this->data);
    }

    public function inscribir()
    {
        $this->data['paises'] = $this->paises;
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');
        return view('users.inscribir')->with($this->data);
    }

    public function storeInscripciones(CreateInscriptoRequest $request)
    {
        $inputs = $request->except('proyectos');
        $inputs['password'] = Hash::make($inputs['dni']);

        $user = User::create($inputs);
        $user->assignRole('Inscripto');
        $user->save();

        $user->proyectos()->attach($request['proyectos']);

        return redirect()->route('users.inscripciones')->with('ok', 'Usuario inscripto con éxito');
    }

    public function inscripcionesShow($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user))
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');


        return view('users.show')->with('user', $user);
    }

    public function inscripcionesEdit($id)
    {
        $this->data['item'] = $this->userRepository->findWithoutFail($id);
        $this->data['paises'] = $this->paises;
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');

        if (empty($this->data['item']))
            return redirect(route('users.inscripciones'))->withErrors('Usuario no encontrado');

        return view('users.inscripciones-edit')->with($this->data);
    }

    public function inscripcionesUpdate($id, UpdateInscriptoRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);
        $inputs = $request->except('proyectos');

        if (empty($user) || $user->email == 'lucas@verticedigital.com.ar' || $user->email == 'fernando@verticedigital.com.ar')
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');

        $user = $this->userRepository->update($inputs, $id);
        $user->proyectos()->attach($request['proyectos']);

        return redirect(route('users.inscripciones'))->with('ok', 'Usuario editado con éxito');
    }

    public function create()
    {
        $this->data['roles'] = Role::pluck('name', 'id');
        return view('users.create')->with($this->data);
    }

    public function store(CreateUserRequest $request)
    {
//        dd($request->all());
        $input = $request->except('roles');
        $input['password'] = Hash::make($request['password']);
        $roles = $request['roles'];

        $user = $this->userRepository->create($input);

        $user->roles()->sync($roles);

        return redirect(route('users.index'))->with('ok', 'Usuario creado correctamente');
    }

    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user))
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');


        return view('users.show')->with('user', $user);
    }

    public function edit($id)
    {
        $this->data['user'] = $this->userRepository->findOrFail($id);
        $this->data['roles'] = Role::pluck('name', 'id');

        return view('users.edit')->with($this->data);
    }

    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user) || $user->email == 'lucas@verticedigital.com.ar' || $user->email == 'fernando@verticedigital.com.ar')
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');

        $roles = $request['roles'];
        $user = $this->userRepository->update($request->all(), $id);
        $user->roles()->sync($roles);

        return redirect(route('users.index'))->with('ok', 'Usuario editado con éxito');
    }

    public function editarRoles(Request $request, $id)
    {
        $user = User::find($id);
        $user->syncRoles($request['roles']);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user))
            return redirect(route('users.index'))->withErrors('Usuario no encontrado');

        if ($user->id == Auth::user()->id)
            return redirect(route('users.index'))->withErrors('No puede eliminarse a sí mismo');

        $this->userRepository->delete($id);

        return redirect(route('users.index'))->with('ok', 'Usuario eliminado con éxito');
    }

    public function changePassword($id, ChangePasswordRequest $request)
    {
        $authUser = Auth::user();
        $user = User::find($id);

        if(!$authUser->id == $user->id)
            return redirect()->back()->withErrors('Está intentando cambiar la contraseña de otro usuario');

        $password = ($request->password)? Hash::make($request->password) : null;
        $user->password = $password;
        $user->save();

        Auth::login($user);

        return redirect()->back()->with('ok', 'Contraseña cambiada con éxito');
    }
}
