@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <a href="{!! route($modelPlural.'.show', $item->id) !!}" class="btn btn-secondary"><i class="mdi mdi-arrow-left"></i> Volver</a>
                        </div>
                        <div class="col-lg-11">
                            <h2 class="ml-3">
                                {!! $item->nombre !!} / <span class="text-warning">Imágenes</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @include('images.images')

                </div>

            </div>
        </div>

    </div>

@endsection

@section('js')

    <script src="{{ asset('croppie/croppie.js') }}"></script>
    <script src="{{ asset('exif-js/exif.js') }}"></script>
    <script src="{{ asset('js/croppie-file-servicio.js') }}"></script>

@endsection