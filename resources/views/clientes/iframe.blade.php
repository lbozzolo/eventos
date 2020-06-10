@extends('layouts.app')

@section('content')

    @can('mostrar_perfil_cliente')
        <div class="card col-lg-12 grid-margin">
            <div class="card-body">
                <h2>{!! ucfirst($item->nombre) !!} / <span class="text-warning">Transmisión</span></h2>

                <p>
                @if($item->publico)

                    <button title="Reportes" type="button" data-toggle="modal" data-target="#reportesPublico" class="btn btn-behance mb-1">
                        <i class="mdi mdi-chart-bar"></i> Reportes
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="reportesPublico" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Reportes no disponibles</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Este evento es público. La funcionalidad REPORTES está disponible únicamente para eventos privados.</p>
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                </div>
                            </div>
                        </div>
                    </div>

                @else

                    <a href="{!! route('proyectos.reportes', $item->id) !!}" class="btn btn-behance mb-1">
                        <i class="mdi mdi-chart-bar"></i> Reportes
                    </a>

                @endif
                <a href="{!! route('proyectos.consultas', $item->id) !!}" class="btn btn-outline-info mb-1">
                    <i class="mdi mdi-message-text-outline"></i> Consultas
                </a>
                <a href="{!! route('clientes.profile', Auth::user()->id) !!}" class="btn btn-outline-dark mb-1">Salir</a>

                </p>

            </div>
        </div>

        <div class="card col-lg-12 grid-margin">
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="text-center">

                            @if($item->iframes->count())

                                <iframe
                                        width="100%"
                                        src="{!! $item->iframes->first()->path !!}"
                                        frameborder="0"
                                        allowfullscreen
                                        class="iframe"
                                ></iframe>

                            @endif

                        </div>
                    </div>

                </div>

            </div>
        </div>
    @endcan

@endsection