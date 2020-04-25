@extends('layouts.app')

@section('content')

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <h2>{!! ucfirst($modelSpanish) !!} / <span class="text-warning">Agregar</span></h2>
        </div>
    </div>

    <div class="card col-lg-12">
        <div class="card-body">

            {!! Form::open(['route' => $modelPlural.'.store', 'method' => 'post']) !!}

            @include($modelPlural.'.fields')

            {!! Form::close() !!}

        </div>
    </div>

@endsection