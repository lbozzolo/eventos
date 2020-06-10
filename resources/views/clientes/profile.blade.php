@extends('layouts.app')

@section('content')

    @can('mostrar_perfil_cliente')
    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <h2>{!! ucfirst($item->nombre) !!} / <span class="text-warning">Perfil</span></h2>
        </div>
    </div>

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">

            <div class="row">
            @foreach($item->proyectos as $proyecto)
                <div class="col-lg-3 stretch-card">
                    <div class="card grid-margin">
                        <div class="card-body">
                            <a href="{!! route('proyectos.reportes', [$proyecto->id]) !!}">
                            <p class="mb-3 text-black">{!! $proyecto->nombre !!}</p>

                            @if($proyecto->images->count())
                                <div style="border: 1px solid lightgray; padding: 10px">
                                    <img src="{!! $proyecto->mainImage() !!}" style="width: 100%" />
                                </div>
                            @endif

                            <span class="btn btn-primary mt-3">Entrar</span>

                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
            </div>

        </div>
    </div>
    @endcan

@endsection