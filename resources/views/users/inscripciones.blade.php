@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h2 class="d-inline-block">
                Inscripciones
                @if(isset($proyectoActual)) /
                    <span class="text-warning">{!! $proyectoActual !!}</span>
                @endif
            </h2>
            <a class="btn btn-primary btn-sm ml-3" href="{!! route('users.inscribir') !!}">Inscribir</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">

            {!! Form::open(['url' => route('users.inscripciones.buscar'), 'method' => 'post', 'class' => 'form']) !!}

            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        {!! Form::label('proyecto_id', 'Buscar por proyecto') !!}
                        {!! Form::select('proyecto_id', $proyectos, null, ['class' => 'form-control select2', 'placeholder' => '']) !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        {!! Form::submit('buscar', ['class' => 'btn btn-outline-primary btn-sm mt-4']) !!}
                        <a href="{!! route('users.inscripciones') !!}" class="btn btn-outline-dark btn-sm mt-4">todos los proyectos</a>
                    </div>
                </div>
            </div>
            <hr>


            {!! Form::close() !!}

            @if($items->count())
                <div class="table-responsive">
                    @include('users.table-inscripciones')
                </div>
            @else
                <span class="text-muted">No hay ningún inscripto cargado en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({

        })

    </script>

@endsection