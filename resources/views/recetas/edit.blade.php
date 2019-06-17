@extends('layouts.app')

@section('css')
    <style type="text/css">
        body .popover{display:none !important; }
    </style>
@endsection

@section('content')

    <div class="card" id="form-fields">
        <div class="card-body">

            <h2 style="font-size: 1.2em" class="text-dark">{!! ucfirst($item->nombre) !!}</h2>
            <h1>{!! ucfirst($modelSpanish) !!} /<span class="text-warning">Editar</span></h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($item, ['route' => [$modelPlural.'.update', $item->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        <div class="row">
                        @include($modelPlural.'.fields-edit')
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card card-body">
                <a href="{!! route('pasos.create', $item->id) !!}" class="">
                    <i class="mdi mdi-checkbox-multiple-marked-outline"></i> Editar Preparación</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-6 mt-3 grid-margin stretch-card">
            <div class="card card-body">

                <h3>Ingredientes
                <a href="{!! route($modelPlural.'.create.ingredientes', $item->id) !!}" class="btn btn-sm btn-outline-primary float-right">
                    <i class="mdi mdi-pencil"></i> editar</a>
                </h3>
                @if($item->ingredientes->count())

                    <ul>
                        @foreach($item->ingredientes as $ingrediente)
                            <li class="list-group-item">{!! $ingrediente->nombre !!}, {!! $ingrediente->cantidad_medida !!}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>

        <div class="col-lg-6 mt-3 grid-margin stretch-card">
            <div class="card card-body">

                @include('images.images')

            </div>
        </div>

    </div>


@endsection

@section('js')

    <script src="{{ asset('croppie/croppie.js') }}"></script>
    <script src="{{ asset('exif-js/exif.js') }}"></script>
    <script src="{{ asset('js/croppie-file-servicio.js') }}"></script>
    <script>

        $('.select2').select2({
            multiple: true
        });

    </script>

@endsection