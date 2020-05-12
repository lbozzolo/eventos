<table class="table table-striped">
    <thead>
    <tr>
        <th style="width: 100px">Id</th>
        <th>Nombre</th>
        <th>Contacto</th>
        <th>Origen</th>
        <th>Inscripciones</th>
        <th>Alta</th>
        <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)

        <tr>
            <td>{!! $item->id !!}</td>
            <td>
                <span>{!! $item->fullname !!}</span><br>
                @if($item->dni)
                <span>dni: {!! $item->dni !!}</span>
                @endif
            </td>
            <td>
                <span>{!! $item->email !!}</span><br>
                <span>tel: {!! $item->phone !!}</span>
            </td>
            <td>
                {!! ($item->localidad)? $item->localidad.'. ' : '' !!}<br>
                {!! $item->pais_origen !!}
            </td>
            <td>
                @if($item->proyectos->count())
                    <span data-toggle="tooltip" class="btn btn-outline-dark"
                          title="• @foreach($item->proyectos as $proyecto) {!! $proyecto->nombre !!}  •  @endforeach">Eventos</span>
                @else
                    <small><em class="text-gray">ninguna</em> </small>
                @endif
            </td>
            <td>{!! $item->fecha_creado !!}</td>
            <td>

                <div class='btn-group'>
                    <a href="{!! route('users.inscripciones.show', [$item->id]) !!}" class='btn btn-secondary btn-xs' title="Ver detalles"><i class="mdi mdi-18px mdi-file-document-box"></i></a>
                    <a href="{!! route('users.inscripciones.edit', $item->id) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    @if(Auth::user()->id != $item->id)
                        <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                    @else
                        <button type="button" class="btn btn-xs  btn-danger" disabled><i class="mdi mdi-delete mdi-18px"></i></button>
                    @endif
                </div>

                <!-- Modal -->
                <div class="modal fade" id="delete{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                {!! Form::open(['route' => ['users.destroy', $item->id], 'method' => 'delete']) !!}

                                <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>

    @endforeach
    </tbody>



</table>

@if($items instanceof \Illuminate\Pagination\LengthAwarePaginator )

    <div class="card-body text-center">
        {!! $items->appends(request()->input())->render() !!}
    </div>

@endif
