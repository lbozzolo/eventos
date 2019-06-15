@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h2 style="font-size: 1.2em" class="text-dark">{!! ucfirst($receta->nombre) !!}</h2>
            <h1>Ingredientes / <span class="text-warning">Agregar</span></h1>

            {!! Form::open(['url' => route($modelPlural.'.store.ingredientes', $receta->id), 'method' => 'post']) !!}

            <div class="row">
                <div class="form-group col-lg-4">
                    {!! Form::label('ingrediente', 'Ingredientes') !!}
                    {!! Form::select('ingrediente', $ingredientes, null, ['class' => 'form-control', 'id' => 'selectize', 'placeholder' => '']) !!}
                </div>
                <div class="form-group selectize-control single col-lg-3">
                    {!! Form::label('cantidad', 'Cantidad') !!}
                    <div class="selectize-control form-control single">
                        {!! Form::number('cantidad', null, ['class' => 'selectize-input', 'min' => '0', 'max' => 999]) !!}
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    {!! Form::label('medida', 'Medida') !!}
                    {!! Form::select('medida', $medidas, null, ['class' => 'form-control', 'id' => 'selectize2', 'placeholder' => '']) !!}
                </div>
                <div class="form-group col-lg-2">
                    {!! Form::submit('+ Agregar ingrediente', ['class' => 'btn btn-success', 'style' => 'margin-top: 35px']) !!}
                </div>
            </div>

            {!! Form::close() !!}

            @if($receta->ingredientes->count())
            <h3>Listado de ingredientes</h3>
            @endif

        </div>
    </div>

@endsection

@section('js')

    <script>
        $('#selectize').selectize();
        $('#selectize2').selectize();
    </script>

@endsection