@extends('layouts.app')

@section('css')

    <style type="text/css">

        a:hover {
            text-decoration: none;
        }

        .project:hover {
            opacity: 60%;
        }

    </style>

@endsection

@section('content')

    @role('Cliente')
        <div class="row">
            <div class="col-lg-12">
                <div class="card grid-margin">
                    <div class="card-body">
                        <h2 class="display-4">
                            Bienvenido a Eventum
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    @endrole

    @role('Superadmin|Admin')
        <div class="row">
            <div class="col-lg-12">
                <div class="card grid-margin">
                    <div class="card-body">
                        <h2 class="display-4">
                            Proyectos recientes
                            <a href="{!! route('proyectos.index') !!}" class="btn btn-primary">ver todos</a>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    @forelse($proyectos as $item)
                        <div class="col-lg-3">
                            <div class="card project">
                                <a href="{!! route('proyectos.show', $item->id) !!}">
                                    <div class="card-body">
                                        <img src="{!! $item->mainImage() !!}" alt="{!! ($item->nombre)? $item->nombre : '-' !!}" style="width: 100%; height: auto"><br><br>
                                        <span class="text-primary">{!! ($item->cliente)? $item->cliente->nombre : '-' !!}</span> ·
                                        <small style="color: gray">{!! $item->categorias->first()->nombre !!}</small><br>
                                        <span class="lead text-black">{!! ($item->nombre)? $item->nombre : '-' !!}</span>
                                        <p class="text-black">
                                            <strong>{!! $item->getNameOfDay($item->fecha) !!}</strong>
                                            {!! $item->fecha !!} ·
                                            <small>{!! $item->hora !!} hs</small>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>

            </div>
        </div>
    @endrole


@endsection
