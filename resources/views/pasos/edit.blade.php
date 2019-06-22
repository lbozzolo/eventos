@extends('layouts.app')

@section('css')

    <style type="text/css">

        .container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
        }
        .video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .modal-dialog{
            position: relative;
            display: table; /* This is important */
            overflow-y: auto;
            overflow-x: auto;
            width: auto;
            min-width: 300px;
            max-width: 100%;
        }

    </style>

@endsection

@section('content')

    <div class="card " id="form-fields">
        <div class="card-body">

            <h2>{!! $receta->nombre !!}</h2>
            <h1>
                {!! ucfirst($modelSpanish) !!} #{!! $item->posicion !!}/
                <span class="text-warning">Editar</span>
            </h1>

            {!! Form::model($item, ['route' => [$modelPlural.'.update', $item->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                <div class="row">
                @include($modelPlural.'.fields-edit')
                </div>

            {!! Form::close() !!}

        </div>
    </div>

    <div class="card col-lg-12 mt-3">
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