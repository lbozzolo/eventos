<table class="table table-bordered">
    <thead>
    <tr>
        <th style="width: 80px">Id</th>
        <th>Nombre</th>
        <th style="width: 90px">Tipo</th>
        <th>Categorías</th>
        <th>Cliente</th>
        <th class="text-center" style="width: 120px">Estado</th>
        <th class="text-center" style="width: 150px">Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{!! $item->id !!}</td>
            <td>
                <a href="{!! route($modelPlural.'.show', $item->id) !!}">
                    {!! ($item->nombre)? $item->nombre : '-' !!}
                </a>
            </td>
            <td>
                @if($item->publico == 1)
                    <i class="mdi mdi-36px mdi-folder-lock-open text-success" title="Público"></i>
                @else
                    <i class="mdi mdi-36px mdi-folder-lock text-danger" title="Privado"></i>
                @endif
            </td>
            <td>
                @forelse($item->categorias as $categoria)
                    <span class="badge badge-secondary text-black">{!! $categoria->nombre !!}</span>
                @empty
                    <small><em class="text-gray">ninguna</em></small>
                @endforelse
            </td>
            <td>{!! ($item->cliente)? $item->cliente->nombre : '-' !!}</td>
            <td class="text-center">
                @if($item->estado->slug == 'activo')
                    <span class="badge badge-primary">{!! $item->estado->nombre !!}</span>
                @else
                    <span class="badge badge-warning">{!! $item->estado->nombre !!}</span>
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