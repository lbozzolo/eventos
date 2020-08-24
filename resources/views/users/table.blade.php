<table class="table table-condensed">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th style="width: 140px">Alta</th>
            <th style="width: 120px" class="text-center">Rol</th>
            <th style="width: 280px" class="text-center">Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        @if(Auth::check() && Auth::user()->isSuperAdmin())
            <tr>
                <td title="{!! $user->id !!}">
                    <span>{!! $user->fullname !!}</span><br>
{{--                    <small>{!! $user->email !!}</small>--}}
                </td>
                <td><span>{!! $user->email !!}</span></td>
                <td>{!! $user->fecha_creado !!}</td>
                <td class="text-center">
                    @foreach($user->roles as $role)
                        <span class=" badge badge-{!! strtolower($role->name) !!}">
                            {!! $role->name !!}
                        </span>
                    @endforeach
                </td>
                <td>

                    <div class='btn-group'>
                        <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-secondary btn-xs' title="Ver detalles"><i class="mdi mdi-18px mdi-file-document-box"></i></a>
                        <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                        @if(Auth::user()->id != $user->id)

                            <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $user->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                            @role('Superadmin')
                            <button title="Destruir" type="button" data-toggle="modal" data-target="#destroy{!! $user->id !!}" class="btn btn-xs text-white" style="background-color: black"><i class="mdi mdi-skull mdi-18px"></i></button>
                            @endrole

                        @else
                        <button type="button" class="btn btn-xs  btn-danger" disabled><i class="mdi mdi-delete mdi-18px"></i></button>
                        @endif
                    </div>

                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#assignRoles{!! $user->id !!}">Roles</button>

                    <!-- Modal window -->
                    <div class="modal fade" id="assignRoles{!! $user->id !!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                {!! Form::open(['url' => route('users.edit.roles', $user->id), 'method' => 'post', 'class' => 'form']) !!}
                                <div class="modal-header">
                                    <h4 class="modal-title w-100">
                                        Roles de {!! $user->fullname !!}
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">

                                        <div class="form-group">
                                            {!! Form::label('roles[]', 'Editar Roles') !!}<br>
                                            {!! Form::select('roles[]', $roles, $user->roles, ['class' => 'form-control select2', 'multiple', 'style' => 'width: 100%']) !!}
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                                    <button type="button" class="btn btn-grey btn-sm" data-dismiss="modal">Cerrar</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="delete{!! $user->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Desea eliminar este usuario?</p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}

                                    <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    @role('Superadmin')

                    <!-- Modal -->
                    <div class="modal fade" id="destroy{!! $user->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" ><i class="mdi mdi-skull text-danger"></i> Destruir Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-danger">¿Desea destruir este usuario?</p>
                                    <p class="lead">{!! $user->fullname !!}</p>
                                    <p>Una vez realizada la acción no se podrá deshacer.</p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::open(['route' => ['users.destruir', $user->id], 'method' => 'delete']) !!}

                                    <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Destruir</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    @endrole

                </td>
            </tr>
        @else
            @if(!$user->isSuperAdmin())
                <tr>
                    <td>{!! $user->id !!}</td>
                    <td>{!! $user->fullname !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->created_at !!}</td>
                    <td>{!! $user->updated_at !!}</td>
                    <td>
                        <div class='btn-group'>
                            <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-secondary btn-xs' title="Ver detalles"><i class="mdi mdi-18px mdi-file-document-box"></i></a>
                            <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                            <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $user->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="delete{!! $user->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar Usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Desea eliminar este usuario?</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}

                                        <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endif
        @endif
    @endforeach
    </tbody>
</table>

@if($users instanceof \Illuminate\Pagination\LengthAwarePaginator )

    <div class="card-body text-center customed-pagination">
        {!! $users->appends(request()->input())->render() !!}
    </div>

@endif