<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        @if(Auth::check() && Auth::user()->isSuperAdmin())
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
                        @if(Auth::user()->id != $user->id)
                        <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $user->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                        @else
                        <button type="button" class="btn btn-xs  btn-danger" disabled><i class="mdi mdi-delete mdi-18px"></i></button>
                        @endif
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