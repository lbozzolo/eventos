<table class="table ">
    <thead>
    <tr>
        <th style="width: 150px"></th>
        <th>Nombre</th>
        <th style="width: 150px">Categoría</th>
        <th>Eventos</th>
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
                    <span class="text-black">{!! ($item->nombre)? $item->nombre : '-' !!}</span>
                </a>
            </td>
            <td>
                <span class="badge badge-dark">{!! $item->categoria->nombre !!}</span>
            </td>
            <td>
                <ul>
                    @foreach($item->proyectos as $proyecto)
                        <li>{!! $proyecto->nombre !!}</li>
                    @endforeach
                </ul>
            </td>
            <td>

                <div class='btn-group'>
                    @can('editar_grupos')
                    <a href="{!! route($modelPlural.'.edit', [$item->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    @endcan
                    @can('eliminar_grupos')
                        <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                    @endcan
                </div>

                 @can('eliminar_grupos')
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
                                <p>¿Desea eliminar {!! ($gender == 'M')? 'este' : 'esta' !!} {!! $modelSpanish !!} de eventos?</p>
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
                @endcan

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

@section('js')

    <script>

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>

@endsection