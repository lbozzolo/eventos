@extends('layouts.app')

@section('css')

    <style type="text/css">

        .service {
            padding: 5px;
            border: 1px solid lightgrey;
            border-radius: 5px; margin: 1px;
        }

    </style>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>{!! ucfirst($modelSpanishPlural) !!}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Doble
                        @if($doble)
                            <a href="{!! route($modelPlural.'.edit', $doble->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'doble']) !!}" title="Crear habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($doble)
                        @if($doble->images->count())
                            @foreach($doble->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($doble->services as $service)
                            <span class="service" data-toggle="tooltip" title="{!! $service->name !!}">
                                <img src="{{ route('imagenes.ver', $service->mainImageThumb()->path) }}" width="30">
                            </span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Triple
                        @if($triple)
                            <a href="{!! route($modelPlural.'.edit', $triple->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'triple']) !!}" title="Crear habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($triple)
                        @if($triple->images->count())
                            @foreach($triple->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($triple->services as $service)
                            <span class="service" data-toggle="tooltip" title="{!! $service->name !!}">
                                <img src="{{ route('imagenes.ver', $service->mainImageThumb()->path) }}" width="30">
                            </span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Cuádruple
                        @if($cuadruple)
                            <a href="{!! route($modelPlural.'.edit', $cuadruple->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'cuadruple']) !!}" title="Crear habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($cuadruple)
                        @if($cuadruple->images->count())
                            @foreach($cuadruple->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($cuadruple->services as $service)
                            <span class="service" data-toggle="tooltip" title="{!! $service->name !!}">
                                <img src="{{ route('imagenes.ver', $service->mainImageThumb()->path) }}" width="30">
                            </span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Séxtuple
                        @if($sextuple)
                            <a href="{!! route($modelPlural.'.edit', $sextuple->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'sextuple']) !!}" title="Crear habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($sextuple)
                        @if($sextuple->images->count())
                            @foreach($sextuple->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($sextuple->services as $service)
                            <span class="service" data-toggle="tooltip" title="{!! $service->name !!}">
                                <img src="{{ route('imagenes.ver', $service->mainImageThumb()->path) }}" width="30">
                            </span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Apart
                        @if($apart)
                            <a href="{!! route($modelPlural.'.edit', $apart->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'apart']) !!}" title="Crear habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($apart)
                        @if($apart->images->count())
                            @foreach($apart->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($apart->services as $service)
                            <span class="service" data-toggle="tooltip" title="{!! $service->name !!}">
                                <img src="{{ route('imagenes.ver', $service->mainImageThumb()->path) }}" width="30">
                            </span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

@endsection
