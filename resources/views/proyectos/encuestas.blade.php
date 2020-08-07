@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <h2>
                        {!! $item->nombre !!} / <span class="text-warning">Encuestas</span>
                        @can('crear_encuestas')
                        <button title="Agregar" type="button" data-toggle="modal" data-target="#create{!! $item->id !!}" class="btn btn-primary">Agregar</button>
                        @endcan
                        <a href="{!! route('proyectos.show', $item->id) !!}" class="btn btn-outline-dark">Volver</a>
                    </h2>

                    @can('crear_encuestas')
                    <!-- Modal -->
                    <div class="modal fade" id="create{!! $item->id !!}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" ><i class="mdi mdi-plus text-success"></i> Agregar {!! $modelSpanish !!}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['route' => ['encuestas.store', $item->id], 'method' => 'post']) !!}
                                <div class="modal-body">

                                    <div class="form-group">
                                        {!! Form::label('nombre', 'Nombre de la encuesta') !!}
                                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('iframe_id', '¿A qué Iframe corresponde la encuesta?') !!}
                                        {!! Form::select('iframe_id', $item->iframes->pluck('title', 'id'),null, ['class' => 'form-control select2', 'placeholder' => 'Todos']) !!}
                                    </div>

                                </div>
                                <div class="modal-footer">

                                    <button title="Agregar encuesta" type="submit" class="btn btn-sm btn-primary">Aceptar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    @endcan

                </div>

                <div class="card-body">

                    <div class="row">
                        @can('mostrar_encuestas')
                            @if($item->encuestas->count())
                                @foreach($item->encuestas as $encuesta)
                                    <div class="col-lg-4">
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
                                                <a href="{!! route('encuestas.show', $encuesta->id) !!}" class="btn btn-outline-primary">Ver encuesta</a>
                                                @if($encuesta->respuestas->count())
                                                    <a href="{!! route('encuestas.respuestas', $encuesta->id) !!}" class="btn btn-secondary">Ver respuestas</a>
                                                @else
                                                    <button class="btn btn-secondary" disabled>Ver respuestas</button>
                                                @endif
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