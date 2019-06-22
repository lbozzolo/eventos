@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="float-right">
                <span title="Tabla"><a href="{!! route('recetas.index.table') !!}"><i class="mdi mdi-table"></i> </a></span>
                <span title="Lista"><i class="mdi mdi-view-list text-muted"></i></span>
            </div>
            <h2>
                {!! ucfirst($modelSpanishPlural) !!}
                <a class="btn btn-primary btn-sm" href="{!! route($modelPlural.'.create') !!}"><i class="mdi mdi-plus-circle"></i> Nueva receta</a>
                <a class="btn btn-outline-secondary btn-sm" href="{!! route('ingredientes.index') !!}"><i class="mdi mdi-food-apple"></i> Ingredientes</a>
            </h2>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            @if($items->count())

                <div class="row">
                    @foreach($items as $item)

                        @if($item->mainImageThumb())

                            <div class="col-lg-2 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body" style="padding: 5px">
                                        <a href="{!! route($modelPlural.'.show', $item->id) !!}" class="text-dark">
                                            <img src="{{ route('imagenes.ver', $item->mainImageThumb()->path) }}" style="margin: 0px auto; width:100%">
                                            <p style="padding: 10px">{!! $item->nombre !!}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        @else

                            <div class="col-lg-2 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body" style="padding: 5px">
                                        <a href="{!! route($modelPlural.'.show', $item->id) !!}" class="text-dark" >
                                            <img src="{!! asset('images/noimage.png') !!}" width="100%">
                                            <p style="padding:10px">{!! $item->nombre !!}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        @endif

                    @endforeach
                </div>

            @else
                <span class="text-muted">{!! $noResultsMessage !!}</span>
            @endif
        </div>
    </div>

@endsection
