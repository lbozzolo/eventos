<table class="table">
    <thead>
    <tr>
        <th style="width: 80px">Id</th>
        <th>Nombre</th>
        <th>slug</th>
        <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{!! $item->id !!}</td>
            <td>{!! $item->nombre !!}</td>
            <td>{!! $item->slug !!}</td>
            <td>

                <div class='btn-group'>
                    <button title="Editar" type="button" data-toggle="modal" data-target="#edit{!! $item->id !!}" class="btn btn-xs  btn-dark"><i class="mdi mdi-pencil-box mdi-18px"></i></button>
                    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                </div>

                <!-- Modal Editar -->
                <div class="modal fade" id="edit{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Editar {!! $modelSpanish !!}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            {!! Form::open(['route' => [$modelPlural.'.update', $item->id], 'method' => 'put']) !!}
                            <div class="modal-body">

                                {!! Form::label('nombre', 'Nombre') !!}
                                {!! Form::text('nombre', $item->nombre, ['class' => 'form-control']) !!}

                            </div>
                            <div class="modal-footer">

                                <button title="Actualizar" type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>


                <!-- Modal Eliminar -->
                <div class="modal fade" id="delete{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar {!! $modelSpanish !!}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar {!! ($gender == 'M')? 'este' : 'esta' !!} {!! $modelSpanish !!}?</p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::open(['route' => [$modelPlural.'.destroy', $item->id], 'method' => 'delete']) !!}

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