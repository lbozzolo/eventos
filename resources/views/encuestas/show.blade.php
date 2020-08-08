@extends('layouts.app')

@section('content')

    @can('mostrar_preguntas')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2>Encuesta -  <span class="text-warning">{!! $item->nombre !!}</span> </h2>
                    <p class="lead">{!! $item->proyecto->nombre !!} {!! ($item->proyecto->cliente)? ', '.$item->proyecto->cliente->nombre.'.' : '' !!}</p>
                    {{--<a href="{!! route('proyectos.show', $item->proyecto->id) !!}" class="btn btn-outline-dark">Volver a proyecto</a>--}}
                    @can('editar_encuestas')

                        <button title="Editar" type="button" data-toggle="modal" data-target="#edit{!! $item->id !!}" class="btn btn-primary">
                            <i class="mdi mdi-pencil"></i>
                            Editar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="edit{!! $item->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" ><i class="mdi mdi-pencil text-primary"></i> Editar {!! $modelSpanish !!}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::model($item, ['route' => ['encuestas.update', $item->id], 'method' => 'put']) !!}
                                    <div class="modal-body">

                                        <div class="form-group">
                                            {!! Form::label('nombre', 'Nombre de la encuesta') !!}
                                            {!! Form::text('nombre', $item->nombre, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('iframe_id', '¿A qué Iframe corresponde la encuesta?') !!}
                                            {!! Form::select('iframe_id', $item->proyecto->iframes->pluck('title', 'id'), ($item->iframe_id)? $item->iframe_id : null, ['class' => 'form-control ', 'placeholder' => 'Todos', 'style' => 'width: 100%']) !!}
                                        </div>

                                    </div>
                                    <div class="modal-footer">

                                        <button title="Agregar encuesta" type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>

                    @endcan
                    <a href="{!! route('proyectos.encuestas', $item->proyecto->id) !!}" class="btn btn-outline-dark">Volver</a>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">

                                @can('crear_preguntas')
                                    <div class="grid-margin card card-header">

                                        {!! Form::open(['url' => route('preguntas.store', $item->id), 'method' => 'post']) !!}

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    {!! Form::select('clase', ['Respuesta única', 'Respuesta múltiple', 'Respuesta de texto libre'], null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Escriba la pregunta...']) !!}
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    {!! Form::submit('Agregar pregunta', ['class' => 'btn btn-success']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        {!! Form::close() !!}
                                    </div>
                                @endcan

                                @foreach($item->preguntas->values() as $pregunta)

                                        <div class="card-body mb-2 pt-3 pb-1" style="border: 1px solid lightgray; border-radius: 5px">

                                            @can('eliminar_preguntas')

                                                <span title="Eliminar pregunta" data-toggle="modal" data-target="#deletePregunta{!! $pregunta->id !!}" style="cursor: pointer" class="float-right">
                                                    <i class="mdi mdi-close text-danger"></i>
                                                </span>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deletePregunta{!! $pregunta->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" ><i class="mdi mdi-pencil text-primary"></i> Eliminar pregunta</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            {!! Form::open(['url' => route('preguntas.delete', $pregunta->id), 'method' => 'delete']) !!}
                                                            <div class="modal-body">

                                                                <p>¿Desea eliminar esta pregunta?</p>

                                                            </div>
                                                            <div class="modal-footer">

                                                                <button title="Eliminar pregunta" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                            </div>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>

                                            @endcan

                                            <p class="text-primary">
                                                <span>{!! $loop->iteration !!} -</span>
                                                {!! $pregunta->descripcion !!}
                                            </p>

                                            @if($pregunta->clase == 2)
                                                <small class="text-info">Esta pregunta tiene respuestas de tipo "texto libre"</small>
                                            @endif
                                            <ul class="list- list-inline">
                                                @if($pregunta->clase != 2)
                                                    <li class="">

                                                        {!! Form::open(['url' => route('opciones.store', $pregunta->id), 'method' => 'post', 'class' => '']) !!}

                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    {!! Form::text('opcion', null, ['class' => 'form-control', 'placeholder' => 'Opción (a, b, c, d)']) !!}
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Escriba la opción de respuesta...']) !!}
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    {!! Form::submit('Agregar opción', ['class' => 'btn btn-outline-primary']) !!}
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {!! Form::close() !!}
                                                    </li>
                                                @endif
                                                @foreach($pregunta->opciones as $opcion)
                                                    <li class="list-inline-item" style="border: 1px solid lightgray; padding: 5px 10px; border-radius: 5px; background-color: ghostwhite">

                                                            {!! $opcion->opcion !!} -
                                                            {!! $opcion->descripcion !!}

                                                        @can('eliminar_opciones')

                                                            <span title="Eliminar opcion" data-toggle="modal" data-target="#deleteOpcion{!! $opcion->id !!}" style="cursor: pointer" class="ml-3 float-right">
                                                                <i class="mdi mdi-close text-danger"></i>
                                                            </span>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="deleteOpcion{!! $opcion->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" ><i class="mdi mdi-pencil text-primary"></i> Eliminar opción</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        {!! Form::open(['url' => route('opciones.delete', $opcion->id), 'method' => 'delete']) !!}
                                                                        <div class="modal-body">

                                                                            <p>¿Desea eliminar esta opción?</p>

                                                                        </div>
                                                                        <div class="modal-footer">

                                                                            <button title="Eliminar pregunta" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                                        </div>
                                                                        {!! Form::close() !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endcan

                                                    </li>
                                                @endforeach
                                            </ul>

                                        </div>

                                @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endcan

@endsection

@section('js')

    <script>

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('.select2').select2({
            multiple: true
        })

    </script>

@endsection