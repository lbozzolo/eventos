<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>Paso</th>
            <th>Imagen</th>
            <th>Descripción</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(!$receta->pasos->count())
            <tr>
                {!! Form::open(['url' => route('pasos.store', $receta->id), 'method' => 'post']) !!}
                    <td>
                        <span class="text-white bg-dark btn" style="padding: 5px 20px; font-size: 2.5em; cursor: default">
                            {!! ($receta->pasos->last())? $receta->pasos->last()->posicion + 1 : '1' !!}
                        </span>
                        {!! Form::hidden('posicion', ($receta->pasos->last())? $receta->pasos->last()->posicion + 1 : '1') !!}
                    </td>
                    <td>
                        <div style="border: 2px dotted lightgrey;" class="text-center">
                            <img src="{!! asset('images/noimage.png') !!}" class="img-responsive" style="border-radius: 0px">
                        </div>
                    </td>
                    <td>{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '4']) !!}</td>
                    <td><button type="submit" class="btn btn-success">Agregar</button></td>
                {!! Form::close() !!}
            </tr>
        @else
            @foreach($receta->pasos->sortBy('posicion') as $paso)
                <tr>
                    <td>
                        <span class="text-white bg-dark btn" style="padding: 5px 20px; font-size: 2.5em; cursor: default">
                            {!! $paso->posicion !!}
                        </span>
                    </td>
                    <td>
                        @if($paso->mainImageThumb())
                            <div>
                                <img src="{{ route('imagenes.ver', $paso->mainImageThumb()->path) }}" class="img-responsive" style="width: 100%; height: 100%; border-radius: 0px">
                            </div>
                        @else
                            <div style="border: 2px dotted lightgrey" class="text-center">
                                <img src="{!! asset('images/noimage.png') !!}" class="img-responsive" style="border-radius: 0px">
                            </div>
                        @endif
                    </td>
                    <td>{!! $paso->descripcion !!}</td>
                    <td>

                        <div class='btn-group'>
                            <a href="{!! route('pasos.edit', $paso->id) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                            <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $paso->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="delete{!! $paso->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar paso {!! $paso->posicion !!}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Desea eliminar el paso {!! $paso->posicion !!} de la preparación?</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open(['url' => route('pasos.destroy', $paso->id), 'method' => 'delete']) !!}

                                        {!! Form::hidden('receta_id', $receta->id) !!}
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
            <tr>
                {!! Form::open(['url' => route('pasos.store', $receta->id), 'method' => 'post']) !!}
                    <td>
                        <span class="text-white bg-dark btn" style="padding: 5px 20px; font-size: 2.5em; cursor: default">
                            {!! ($receta->pasos->last())? $receta->pasos->last()->posicion + 1 : '1' !!}
                        </span>
                        {{--{!! $receta->pasos->last()->posicion + 1 !!}--}}
                        {!! Form::hidden('posicion', ($receta->pasos->last())? $receta->pasos->last()->posicion + 1 : '1') !!}
                    </td>
                    <td>
                        <div style="border: 2px dotted lightgrey" class="text-center">
                            <img src="{!! asset('images/noimage.png') !!}" class="img-responsive" style="border-radius: 0px">
                        </div>
                    </td>
                    <td>{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '4']) !!}</td>
                    <td><button type="submit" class="btn btn-success">Agregar</button></td>
                {!! Form::close() !!}
            </tr>
        @endif
        </tbody>
    </table>
</div>
