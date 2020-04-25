@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <a href="{!! route('proyectos.edit', $item->proyecto->id) !!}" class="btn btn-secondary"><i class="mdi mdi-arrow-left"></i> Volver</a>
                        </div>
                        <div class="col-lg-11">
                            <h2 class="ml-3">
                                {!! $item->proyecto->nombre !!} / <span class="text-warning">Header</span>
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