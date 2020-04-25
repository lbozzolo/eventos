
<div class="row">
    @foreach($items as $item)
        <div class="col-lg-3 stretch-card">
            <div class="card grid-margin">
                <div class="card-body">

                    <p class="mb-3">{!! $item->nombre !!}</p>

                    @if($item->images->count())
                        <div style="border: 1px solid lightgray; padding: 10px">
                            <img src="{!! $item->mainImage() !!}" style="width: 100%" />
                        </div>
                    @endif

                    <div class='btn-group mt-3'>
                        <a href="{!! route($modelPlural.'.edit', [$item->id]) !!}" class='btn btn-dark ' title="Editar">Editar</a>
                        <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-danger">Eliminar</button>
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
                                    <p class="lead">{!! $item->nombre !!}</p>
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

                </div>
            </div>
        </div>
    @endforeach
</div>