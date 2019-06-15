@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="card col-lg-12">
            <div class="card-body">

                <h1>
                    {!! ucfirst($modelSpanishPlural) !!}
                    <a class="btn btn-primary btn-sm" href="{!! route($modelPlural.'.create') !!}"><i class="mdi mdi-plus-circle"></i> Nuevo ingrediente</a>
                    <a class="btn btn-outline-secondary btn-sm" href="{!! route('recetas.index') !!}"><i class="mdi mdi-file-document"></i> Volver a Recetas</a>
                </h1>

            </div>
        </div>

        <div class="card card-body col-lg-6 mt-2">
            @if($items->count())

                <h4>Ingredientes disponibles</h4>
                {!! Form::select('ingredientes', $items->pluck('nombre', 'id'), null, ['form-control', 'id' => 'selectize']) !!}

            @else
                <h4>Ingredientes disponibles</h4>
                <span class="text-muted">{!! $noResultsMessage !!}</span>
            @endif
        </div>

        <div class="card card-body col-lg-6 mt-2">

            <h4>Ingresar nuevo ingrediente</h4>
            {!! Form::open(['url' => route($modelPlural.'.store'), 'method' => 'post']) !!}

                <div class="form-group">
                    <input type="text" name="nombre" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" name="nombre" class="form-control file-upload-info" placeholder="Nombre del ingrediente">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="submit">Guardar</button>
                      </span>
                    </div>
                </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection

@section('js')

    <script>$('#selectize').selectize();</script>

@endsection
