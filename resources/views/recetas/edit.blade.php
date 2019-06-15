@extends('layouts.app')

@section('css')
    <style type="text/css">
        body .popover{display:none !important; }
    </style>
@endsection

@section('content')

    <div class="card " id="form-fields">
        <div class="card-body">

            <h2 style="font-size: 1.2em" class="text-dark">{!! ucfirst($item->nombre) !!}</h2>
            <h1>
                {!! ucfirst($modelSpanish) !!} /
                <span class="text-warning">Editar</span><br>
                <a href="{!! route($modelPlural.'.create.ingredientes', $item->id) !!}" class="btn btn-sm btn-outline-dark">
                    <i class="mdi mdi-food-apple"></i> Agregar Ingredientes</a>
                <a href="{!! route('pasos.create', $item->id) !!}" class="btn btn-sm btn-outline-dark">
                    <i class="mdi mdi-checkbox-multiple-marked-outline"></i> Editar Preparación</a>
            </h1>
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
    <script>

        $('.select2').select2({
            multiple: true
        });

        $(document).ready(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 300,
            });
        });

        $('.datepicker').datepicker({
            format: "mm-yyyy",
            viewMode: "months",
            minViewMode: "months"
        });


    </script>

@endsection