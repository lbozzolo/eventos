@extends('layouts.app')

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
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Doble
                        @if($doble->count())
                            <a href="{!! route($modelPlural.'.edit', $doble->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'doble']) !!}" title="Editar habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($doble->count())
                        @if($doble->images->count())
                            @foreach($doble->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($doble->services as $service)
                            <span class="badge badge-dark">{!! $service->name !!}</span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Triple
                        @if($triple->count())
                            <a href="{!! route($modelPlural.'.edit', $triple->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'triple']) !!}" title="Editar habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($triple->count())
                        @if($triple->images->count())
                            @foreach($triple->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($triple->services as $service)
                            <span class="badge badge-dark">{!! $service->name !!}</span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Cuádruple
                        @if($cuadruple->count())
                            <a href="{!! route($modelPlural.'.edit', $triple->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'cuadruple']) !!}" title="Editar habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($cuadruple->count())
                        @if($cuadruple->images->count())
                            @foreach($cuadruple->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($cuadruple->services as $service)
                            <span class="badge badge-dark">{!! $service->name !!}</span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-4">
                        Séxtuple
                        @if($sextuple->count())
                            <a href="{!! route($modelPlural.'.edit', $sextuple->id) !!}" title="Editar habitación" class="float-right"><i class="mdi mdi-pencil-box-outline"></i></a>
                        @else
                            <a href="{!! route($modelPlural.'.create', ['type' => 'sextuple']) !!}" title="Editar habitación" class="float-right text-success"><i class="mdi mdi-plus-circle"></i></a>
                        @endif
                    </h3>
                    @if($sextuple->count())
                        @if($sextuple->images->count())
                            @foreach($sextuple->imagesThumb->take(4) as $image)
                                <img src="{{ route('imagenes.ver', $image->path) }}" style="margin: 0px auto; width:23%">
                            @endforeach
                        @endif
                        <h4 class="mt-3">Servicios</h4>
                        @forelse($sextuple->services as $service)
                            <span class="badge badge-dark">{!! $service->name !!}</span>
                        @empty
                            <small class="text-secondary">Sin servicios.</small>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
