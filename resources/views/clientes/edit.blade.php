@extends('layouts.app')

@section('content')

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <h2>{!! ucfirst($modelSpanish) !!} / <span class="text-warning">Editar</span></h2>
        </div>
    </div>

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">

            {!! Form::model($item, ['route' => [$modelPlural.'.update', $item->id], 'method' => 'patch']) !!}

            @include($modelPlural.'.fields')

            {!! Form::close() !!}

        </div>
    </div>

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            @include('images.images')
        </div>
    </div>

@endsection

@section('js')

    <script src="{{ asset('croppie/croppie.js') }}"></script>
    <script src="{{ asset('exif-js/exif.js') }}"></script>
    <script src="{{ asset('js/croppie-file-servicio.js') }}"></script>

@endsection