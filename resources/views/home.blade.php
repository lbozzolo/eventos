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

    @role('Cliente|Moderador')
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
                            Eventos recientes
                            <a href="{!! route('proyectos.index') !!}" class="btn btn-primary">ver todos</a>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    @forelse($proyectos as $item)
                        <div class="col-lg-3 stretch-card">
                            <div class="card project">
                                <a href="{!! route('proyectos.show', $item->id) !!}">
                                    <img src="{!! $item->mainImage() !!}" alt="{!! ($item->nombre)? $item->nombre : '-' !!}" style="width: 100%; height: auto"><br><br>
                                    <div class="card-body">
                                        @if($item->grupos->count())
                                            @foreach($item->grupos as $grupo)
                                                <span class="badge badge-danger">{!! $grupo->nombre !!}</span>
                                            @endforeach
                                            <br>
                                        @endif
                                        <span class="text-primary mt-3">{!! ($item->cliente)? $item->cliente->nombre : '-' !!}</span> ·
                                        <small style="color: gray">{!! $item->categorias->first()->nombre !!}</small><br>
                                        <span class="lead text-black">{!! ($item->nombre)? $item->nombre : '-' !!}</span>
                                        <p class="text-gray mt-3">
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

        @if($otros->count() > 0)
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card grid-margin">
                    <div class="card-body">
                        <h4>Otros eventos</h4>
                    </div>
                </div>

                <div class="row">

                    @forelse($otros as $item)
                        <div class="col-lg-2 stretch-card grid-margin">
                            <div class="card project">
                                <a href="{!! route('proyectos.show', $item->id) !!}">
                                    <img src="{!! $item->mainImage() !!}" alt="{!! ($item->nombre)? $item->nombre : '-' !!}" style="width: 100%; height: auto"><br><br>
                                    <div style="padding: 10px 20px">
                                        <p class="text-black">{!! ($item->nombre)? $item->nombre : '-' !!}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>

            </div>
        </div>
        @endif

    @endrole


@endsection
