@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2>
                        {!! ucfirst($modelSpanishPlural) !!}
                        <a class="btn btn-outline-secondary btn-sm" href="{!! route('recetas.index') !!}"><i class="mdi mdi-file-document"></i> Volver a Recetas</a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if($items->count())
                        <h4>Ingredientes disponibles</h4>
                        {!! Form::select('ingredientes', $items->pluck('nombre', 'id'), null, ['form-control', 'id' => 'selectize']) !!}

                    @else
                        <h4>Ingredientes disponibles</h4>
                        <span class="text-muted">{!! $noResultsMessage !!}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
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
        </div>

    </div>

@endsection

@section('js')

    <script>$('#selectize').selectize();</script>

@endsection
