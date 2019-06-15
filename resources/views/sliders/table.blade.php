<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Texto visible</th>
            <th>Estado</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{!! $item->id !!}</td>
            <td>{!! $item->name !!}</td>
            <td>
                @if($item->text_active)
                    <label class="badge badge-primary">activado</label>
                @else
                    <label class="badge badge-secondary">desactivado</label>
                @endif
            </td>
            <td>
                @if($item->active)
                    <label class="badge badge-success">{!! ($gender == 'M')? 'activo' : 'activa' !!}</label>
                @else
                    <label class="badge badge-danger">{!! ($gender == 'M')? 'inactivo' : 'inactiva' !!}</label>
                @endif
            </td>
            <td>

                <div class='btn-group'>
                    <a href="{!! route($modelPlural.'.edit', [$item->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                    @if(!$item->active && count($item->images) != 0)
                        <a href="{!! route($modelPlural.'.activate', $item->id) !!}" title="Activar este {!! $modelSpanish !!}" class="btn btn-xs btn-success"><i class="mdi mdi-flag-variant mdi-18px"></i> </a>
                    @else
                        <button type="button" class="btn btn-xs btn-success" title="Activar este {!! $modelSpanish !!}" disabled><i class="mdi mdi-flag-variant-outline mdi-18px"></i></button>
                    @endif
                </div>

                <!-- Modal -->
                <div class="modal fade" id="delete{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar {!! ucfirst($modelSpanish) !!}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar este {!! $modelSpanish !!}?</p>
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