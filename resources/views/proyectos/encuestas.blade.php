@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <h2>
                        {!! $item->nombre !!} / <span class="text-warning">Encuestas</span>
                        {{--@can('crear_encuestas')--}}
                        {{--<button title="Agregar" type="button" data-toggle="modal" data-target="#create{!! $item->id !!}" class="btn btn-primary">Agregar</button>--}}
                        {{--@endcan--}}
                        <a href="{!! route('proyectos.show', $item->id) !!}" class="btn btn-outline-dark">Volver</a>
                    </h2>

                    {{--@can('crear_encuestas')--}}
                        {{--<div class="modal fade" id="create{!! $item->id !!}" tabindex="-1" role="dialog" aria-hidden="true">--}}
                        {{--<div class="modal-dialog" role="document">--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<h5 class="modal-title" ><i class="mdi mdi-plus text-success"></i> Agregar {!! $modelSpanish !!}</h5>--}}
                                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                        {{--<span aria-hidden="true">&times;</span>--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                                {{--{!! Form::open(['route' => ['encuestas.store', $item->id], 'method' => 'post']) !!}--}}
                                {{--<div class="modal-body">--}}

                                    {{--<div class="form-group">--}}
                                        {{--{!! Form::label('nombre', 'Nombre de la encuesta') !!}--}}
                                        {{--{!! Form::text('nombre', null, ['class' => 'form-control']) !!}--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--{!! Form::label('iframe_id', '¿A qué Iframe corresponde la encuesta?') !!}--}}
                                        {{--{!! Form::select('iframe_id', $item->iframes->pluck('title', 'id'),null, ['class' => 'form-control select2', 'placeholder' => 'Todos']) !!}--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                                {{--<div class="modal-footer">--}}

                                    {{--<button title="Agregar encuesta" type="submit" class="btn btn-sm btn-primary">Aceptar</button>--}}
                                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>--}}

                                {{--</div>--}}
                                {{--{!! Form::close() !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--@endcan--}}

                </div>

                <div class="card-body">

                    <div class="row">
                        @can('mostrar_encuestas')
                            @if($item->encuestas->count())
                                @foreach($item->encuestas as $encuesta)
                                    <div class="col-lg-4 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4>{!! $encuesta->nombre !!}</h4>
                                                @if($encuesta->iframe)
                                                    <p>
                                                        Iframe:
                                                        <span class="badge badge-primary">{!! $encuesta->iframe->title !!}</span>
                                                    </p>
                                                @else
                                                    <p>Iframe: todos</p>
                                                @endif
                                                {{--<a href="{!! route('encuestas.show', $encuesta->id) !!}" class="btn btn-outline-primary">Configurar</a>--}}
                                                @if($encuesta->respuestas->count())
                                                    <a href="{!! route('encuestas.respuestas', $encuesta->id) !!}" class="btn btn-secondary">Respuestas</a>
                                                @else
                                                    <button class="btn btn-secondary" disabled>Respuestas</button>
                                                @endif

                                                @can('eliminar_encuestas')
                                                    <button title="Eliminar Encuesta" type="button" data-toggle="modal" data-target="#delete{!! $encuesta->id !!}" class="btn btn-outline-danger">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="delete{!! $encuesta->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" ><i class="mdi mdi-delete text-danger"></i> Eliminar encuesta</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                {!! Form::open(['route' => ['encuestas.delete', $encuesta->id], 'method' => 'delete']) !!}
                                                                <div class="modal-body">
                                                                    <p class="text-danger">¿Desea eliminar esta encuesta?</p>
                                                                    <p class="lead">{!! $encuesta->nombre !!}</p>
                                                                </div>
                                                                <div class="modal-footer">

                                                                    <button title="Agregar encuesta" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                                </div>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endcan
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div>
                                    <em><small class="text-muted">No hay ninguna encuesta en este proyecto</small> </em>
                                </div>
                            @endif
                        @endcan
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection