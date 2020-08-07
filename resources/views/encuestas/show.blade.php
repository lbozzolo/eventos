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
                                    <div class="card grid-margin">
                                        <div class="card-body">
                                            <p class="lead">
                                                <span>{!! $loop->iteration !!} -</span>
                                                {!! $pregunta->descripcion !!}
                                            </p>
                                            @if($pregunta->clase == 2)
                                                <small class="text-info">Esta pregunta tiene respuestas de tipo "texto libre"</small>
                                            @endif
                                            <ul class="list-unstyled">
                                                @if($pregunta->clase != 2)
                                                    <li class="list-group-item">

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
                                                    <li class="list-group-item bg-light">
                                                        <p class="">
                                                            {!! $opcion->opcion !!} -
                                                            {!! $opcion->descripcion !!}
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
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