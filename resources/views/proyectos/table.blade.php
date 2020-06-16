<table class="table datatables">
    <thead>
    <tr>
        <th style="width: 120px"></th>
        <th style="width: 200px">Nombre</th>
        <th style="width: 80px">Fecha del evento</th>
        <th class="text-center">Inscriptos</th>
        <th style="width: 120px">Tipo</th>
        <th style="width: 120px">Estado</th>
        <th style="width: 150px">Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td title="{!! $item->id !!}">
                <a href="{!! route($modelPlural.'.show', $item->id) !!}">
                    <img src="{!! $item->mainImageThumb() !!}" alt="{!! ($item->nombre)? $item->nombre : '-' !!}" style="width: 100%; height: auto">
                </a>
            </td>
            <td>
                <a href="{!! route($modelPlural.'.show', $item->id) !!}">
                    <span class="text-primary">{!! ($item->cliente)? $item->cliente->nombre : '-' !!}</span> ·
                    <small style="color: gray">{!! $item->categorias->first()->nombre !!}</small><br>
                    <span class="lead text-black">{!! ($item->nombre)? $item->nombre : '-' !!}</span>
                </a>
            </td>
            <td>
                <strong>{!! $item->getNameOfDay($item->fecha) !!}</strong><br>
                {!! $item->fecha !!}<br>
                <small>{!! $item->hora !!} hs</small>
            </td>
            <td class="text-center">
                {!! $item->inscriptos->count() !!}
            </td>
            <td>
                @if($item->tipoProyecto() == 'Público')
                    <span class=" text-success">{!! strtoupper($item->tipoProyecto()) !!}</span>
                    <br><small class="text-gray">Acceso libre y gratuito</small>
                @elseif($item->tipoProyecto() == 'Privado')
                    <span class=" text-warning">{!! strtoupper($item->tipoProyecto()) !!}</span>
                    <br><small class="text-gray">Gratuito. Requiere inscripción</small>
                @else
                    <span class=" text-danger">{!! strtoupper($item->tipoProyecto()) !!}</span>
                    <br><small class="text-gray">Requiere inscripción</small>
                @endif
            </td>
            <td class="text-">
                @if($item->estado->slug == 'activo')
                    <span class="text-success">{!! strtoupper($item->estado->nombre) !!}</span>
                    <br><small class="text-gray">Visible en web</small>
                @elseif($item->estado->slug == 'finalizado')
                    <span class="text-danger">{!! strtoupper($item->estado->nombre) !!}</span>
                    <br><small class="text-gray">Accesible a los videos</small>
                @elseif($item->estado->slug == 'inactivo')
                    <span class="text-info">{!! strtoupper($item->estado->nombre) !!}</span>
                    <br><small class="text-gray">No visible en web</small>
                @else
                    <span class="text-dark">{!! strtoupper($item->estado->nombre) !!}</span>
                @endif
            </td>
            <td>

                <div class='btn-group'>
                    <a href="{!! route($modelPlural.'.edit', [$item->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                </div>


                <!-- Modal -->
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


@if($items instanceof \Illuminate\Pagination\LengthAwarePaginator )

    <div class="card-body text-center customed-pagination">
        {!! $items->appends(request()->input())->render() !!}
    </div>

@endif