<table class="table  table-condensed">
    <thead class="card-header">
    <tr>
        <th>Roles</th>
        <th class="text-right">Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $role)
        @if($items->count())

            @if(Auth::check())
                <tr>
                    <td>{!! $role->name !!}</td>
                    <td>

                        <div class="btn-group btn-group-xs float-right" role="group">
                            <button type="button" class="btn btn-dark btn-xs" title="EDITAR" data-toggle="modal" data-target="#editRole{!! $role->id !!}">
                                <i class="mdi mdi-18px mdi-pencil-box"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-xs" title="ELIMINAR" data-toggle="modal" data-target="#deleteRole{!! $role->id !!}">
                                <i class="mdi mdi-delete mdi-18px"></i>
                            </button>
                        </div>

                        <div class="modal fade text-center" id="deleteRole{!! $role->id !!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true">

                            <div class="modal-dialog modal-md" role="document">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title w-100" id="myModalLabel">
                                            Eliminar rol
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            ¿Desea eliminar el rol?
                                            <p class="lead text-danger">{!! $role->name !!}</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                                        {!! Form::open(['url' => route('roles.delete', $role->id), 'method' => 'delete']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editRole{!! $role->id !!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true">

                            <div class="modal-dialog modal-md" role="document">

                                <div class="modal-content">
                                    {!! Form::open(['url' => route('roles.update', $role->id), 'method' => 'put']) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title w-100" id="myModalLabel">
                                            Editar rol
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <div class="form-group">
                                                {!! Form::label('name', 'Nombre') !!}
                                                {!! Form::text('name', $role->name, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-grey btn-sm" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>

            @endif

        @endif


        <!-- Modal -->
        <div class="modal fade" id="delete{!! $role->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar Rol</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>¿Desea eliminar este rol?</p>
                    </div>
                    <div class="modal-footer">
                        {!! Form::open(['route' => ['roles.delete', $role->id], 'method' => 'delete']) !!}

                        <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    @endforeach
        <tr>

            {!! Form::open(['url' => route('roles.store'), 'method' => 'post', 'class' => 'float-right']) !!}
                <td>
                    <input type="text" name="name" class="form-control" placeholder="Nombre del rol..." autocomplete="off">
                </td>
                <td>
                    <button type="submit" class="btn btn-success btn-sm mb-0 float-right">Agregar</button>
                </td>
            {!! Form::close() !!}

        </tr>
    </tbody>

</table>
