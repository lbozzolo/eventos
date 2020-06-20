@extends('layouts.app')

@section('content')

    <div class="row">

        @if($item->codigos->count() == 0 && $item->tipoProyecto() == 'Pago')
            <div class="col-lg-12">
                <div class="alert alert-warning alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                    <i class="icon mdi mdi-alert"></i>
                    Este evento es pago y necesita generar códigos de acceso.
                    <button title="Generar códigos" type="button" data-toggle="modal" data-target="#generarCodigos" class="ml-3 btn btn-sm btn-outline-primary">
                        Generar ahora</button>
                </div>
            </div>
        @endif

            @if($item->inscriptos->count() >= 0 && $item->maximas_consultas >= 0)
                <div class="col-lg-12">
                    <div class="alert alert-warning alert-dismissible">
                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                        <i class="icon mdi mdi-alert text-danger"></i>
                        <span class="text-danger">ATENCIÓN. Este evento tiene más de 1000 inscriptos.</span><br>
                        Se recomienda configurar el máximo de consultas permitidas en 2 (o menos) para no saturar los servidores y optimizar el rendimiento.
                    </div>
                </div>
            @endif

        <div class="col-lg-12">
            <div class="card grid-margin">


                    <div class="row">

                        <div class="col-lg-2 col-md-3 col-sm-5 col-xs-12">
                            <div style="background: url('{!! $item->mainImage() !!}') no-repeat  center; background-size: cover;  height: 100%"></div>
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12">
                            <div class="card-body">
                                <h2><span class="text-dark">{!! $item->nombre !!}</span><br></h2>
                                <p>{!! ($item->descripcion)? $item->descripcion : '' !!}</p>

                                <a href="{!! route($modelPlural.'.edit', ['id' => $item->id]) !!}" class="btn btn-outline-primary mb-1">
                                    <i class="mdi mdi-pencil"></i>
                                    Editar
                                </a>

                                @if($item->tipoProyecto() == 'Público')

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

                                <a href="{!! route($modelPlural.'.reportes', $item->id) !!}" class="btn btn-behance mb-1">
                                    <i class="mdi mdi-chart-bar"></i> Reportes
                                </a>

                                @endif

                                <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-outline-dark mb-1">Volver</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="card-body">
                                <strong>Fecha del evento</strong> <br>
                                {!! $item->fecha !!}, {!! $item->hora !!} hs <br>
                                <small>estado</small>
                                @if($item->estado->slug == 'activo')
                                    <span class="text-success">{!! strtoupper($item->estado->nombre) !!}</span>
                                @elseif($item->estado->slug == 'finalizado')
                                    <span class="text-danger">{!! strtoupper($item->estado->nombre) !!}</span>
                                @else
                                    <span class="text-info">{!! strtoupper($item->estado->nombre) !!}</span>
                                @endif
                                @if($item->isGoingOn())
                                    <br><br>
                                    <small class="" style="border: 1px solid limegreen; padding: 5px 10px">
                                        en vivo <i class="mdi mdi-circle text-success"></i>
                                     </small>
                                @endif
                            </div>
                        </div>
                    </div>

            </div>
        </div>

        <div class="col-lg-3 col-md-6"> @include('proyectos.partials.widget-images')</div>
        <div class="col-lg-3 col-md-6">@include('proyectos.partials.widget-pdf')</div>
        <div class="col-lg-3 col-md-6">@include('proyectos.partials.widget-iframes')</div>
        <div class="col-lg-3 col-md-6">@include('proyectos.partials.widget-videos')</div>


        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">



                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4 grid-margin">
                            <div class="row">
                                <div class="col-lg-6">
                                    <span class="text-primary">Cliente</span><br>
                                    <p class="lead">{!! $item->cliente->nombre !!}</p>
                                </div>
                                <div class="col-lg-6">
                                    <span class="text-info">Categoría</span><br>
                                    <p class="lead">
                                        @forelse($item->categorias as $categoria)
                                            <span class="badge badge-secondary text-black">{!! $categoria->nombre !!}</span>
                                        @empty
                                            <small><em class="text-gray">ninguna</em></small>
                                        @endforelse
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <hr>
                                    <span class="text-warning">Auspiciantes</span><br>
                                    <p class="lead">
                                        @forelse($item->auspiciantes as $auspiciante)
                                            <span class="badge badge-secondary text-black">{!! $auspiciante->nombre !!}</span>
                                        @empty
                                            <small><em class="text-gray">ninguno</em></small>
                                        @endforelse
                                    </p>
                                </div>


                            </div>
                        </div>


                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 grid-margin text-center card card-body">

                            <div class="text-left">
                                <p style="border-bottom: 1px dashed gray">
                                    Inscriptos
                                    <span class="float-right text-primary">
                                        <a href="{!! route('proyectos.inscripciones', $item->id) !!}">
                                        {!! $item->inscriptos->count() !!}
                                        </a>
                                    </span>
                                    <a href="{!! route('proyectos.export.inscriptos', $item->id) !!}">exportar</a>
                                </p>
                                <p style="border-bottom: 1px dashed gray">
                                    Consultas
                                    <span class="float-right text-primary">
                                        <a href="{!! route('proyectos.consultas', $item->id) !!}">
                                        {!! $item->consultas->count() !!}
                                        </a>
                                    </span>
                                    <a href="{!! route('proyectos.export.consultas', $item->id) !!}">exportar</a>
                                </p>
                            </div>

                            <div class="text-left mt-5">
                                {!! Form::open(['url' => route('proyectos.update.cantidad.consultas', $item->id), 'method' => 'patch']) !!}

                                    <div class="form-group mb-0">
                                        <p style="border-bottom: 1px dashed gray">
                                            Máximo de consultas por inscripto
                                            <span class="float-right">
                                                @if($item->maximas_consultas)
                                                    {!! $item->maximas_consultas !!}
                                                @else
                                                    {{--<span class="badge badge-info">ilimitado</span>--}}
                                                    <em class="text-gray"><small>ilimitado</small></em>
                                                @endif
                                            </span>
                                        </p>
                                    </div>

                                    <div class="input-group col-xs-12">
                                        <input name="cantidad" type="number" class="form-control file-upload-info"
                                               placeholder="Cantidad máxima" style="border: 1px solid lightgray" value="{!! $item->maximas_consultas !!}">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary btn-xs" type="submit">Definir</button>
                                        </span>
                                    </div>

                                    @if($item->maximas_consultas != null)
                                    <a href="{!! route('proyectos.update.consultas.ilimitadas', $item->id) !!}">
                                        <small>Definir número ilimitado de consultas</small></a>
                                    @endif

                                {!! Form::close() !!}
                            </div>

                            {{--@include('proyectos.partials.boton-exportar-inscriptos')--}}

                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 mt-md-0 grid-margin">

                            @include('proyectos.partials.tipo-proyecto')

                        </div>



                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: true
        })

    </script>

@endsection