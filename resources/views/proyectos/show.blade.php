@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card grid-margin">


                    <div class="row">
                        <div class="col-lg-9 col-md-7 col-sm-6">
                            <div class="card-body">
                                <h2><span class="text-dark">{!! $item->nombre !!}</span><br></h2>
                                <p>{!! ($item->descripcion)? $item->descripcion : '' !!}</p>

                                <a href="{!! route($modelPlural.'.edit', ['id' => $item->id]) !!}" class="btn btn-outline-primary mb-1">
                                    <i class="mdi mdi-pencil"></i>
                                    Editar
                                </a>
                                <a href="{!! route($modelPlural.'.reportes', $item->id) !!}" class="btn btn-behance mb-1">
                                    <i class="mdi mdi-chart-bar"></i>
                                    Reportes
                                </a>
                                <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-outline-dark mb-1">Volver</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 col-sm-6">
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

                    {{--<span class="float-right text-right">--}}
                        {{--<strong>Fecha del evento</strong> <br>--}}
                        {{--{!! $item->fecha !!}, {!! $item->hora !!} hs <br>--}}

                        {{--<small>estado</small>--}}
                        {{--@if($item->estado->slug == 'activo')--}}
                            {{--<span class="text-success">{!! strtoupper($item->estado->nombre) !!}</span>--}}
                        {{--@elseif($item->estado->slug == 'finalizado')--}}
                            {{--<span class="text-danger">{!! strtoupper($item->estado->nombre) !!}</span>--}}
                        {{--@else--}}
                            {{--<span class="text-info">{!! strtoupper($item->estado->nombre) !!}</span>--}}
                        {{--@endif--}}
                        {{--@if($item->isGoingOn())--}}
                            {{--<br><br>--}}
                            {{--<small class="" style="border: 1px solid limegreen; padding: 5px 10px">--}}
                                {{--en vivo <i class="mdi mdi-circle text-success"></i>--}}
                            {{--</small>--}}
                        {{--@endif--}}
                    {{--</span>--}}

                    {{--<h2 class="">--}}
                        {{--<span class="text-dark">{!! $item->nombre !!}</span><br>--}}
                    {{--</h2>--}}
                    {{--<p>{!! ($item->descripcion)? $item->descripcion : '' !!}</p>--}}



                    {{--<a href="{!! route($modelPlural.'.edit', ['id' => $item->id]) !!}" class="btn btn-outline-primary">--}}
                        {{--<i class="mdi mdi-pencil"></i>--}}
                        {{--Editar Proyecto--}}
                    {{--</a>--}}
                    {{--<a href="{!! route($modelPlural.'.reportes', $item->id) !!}" class="btn btn-behance">--}}
                        {{--<i class="mdi mdi-chart-bar"></i>--}}
                        {{--Reportes--}}
                    {{--</a>--}}
                    {{--<a href="{!! route($modelPlural.'.index') !!}" class="btn btn-outline-dark">Volver</a>--}}

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



                        <div class="col-lg-5 col-md-6 mt-md-0 mt-4 grid-margin">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <table class="table table-condensed">
                                        <tr>
                                            <td class="text-right text-info" style="width: 150px">Cliente</td>
                                            <td class="text-left">{!! $item->cliente->nombre !!}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right text-info">Categoría</td>
                                            <td class="text-left">
                                                @forelse($item->categorias as $categoria)
                                                    <span class="badge badge-secondary text-black">{!! $categoria->nombre !!}</span>
                                                @empty
                                                    <small><em class="text-gray">ninguna</em></small>
                                                @endforelse
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right text-info">Auspiciantes</td>
                                            <td class="text-left">
                                                @forelse($item->auspiciantes as $auspiciante)
                                                    <span class="badge badge-secondary text-black">{!! $auspiciante->nombre !!}</span>
                                                @empty
                                                    <small><em class="text-gray">ninguno</em></small>
                                                @endforelse
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-2 col-md-6 grid-margin">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <a href="{!! route('proyectos.inscripciones', $item->id) !!}" class="btn btn-outline-dark">
                                        <h3 class="mb-0 font-weight-semibold">{!! $item->inscriptos->count() !!}</h3>
                                        <h5 class="mb-2 font-weight-medium text-gray">Inscriptos</h5>
                                    </a>
                                    <a href="{!! route('proyectos.export.inscriptos', $item->id) !!}" class="btn btn-info mt-1" style="display: block">
                                        exportar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 mt-md-0 grid-margin">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <a href="{!! route($modelPlural.'.consultas', $item->id) !!}" class="btn btn-outline-dark">
                                        <h3 class="mb-0 font-weight-semibold">{!! $item->consultas->count() !!}</h3>
                                        <h5 class="mb-2 font-weight-medium text-gray">Consultas</h5>
                                    </a>
                                    <a href="{!! route('proyectos.export.consultas', $item->id) !!}" class="btn btn-info mt-1" style="display: block">
                                        exportar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-md-0 grid-margin">
                            <div class="d-flex" style="border: 1px solid lightgray; padding: 20px 50px">
                                <div class="wrapper">
                                    @if($item->publico)
                                        <h3 class="mb-0 font-weight-semibold"><i class="mdi mdi-36px mdi-folder-lock-open text-success" title="Público"></i> Público</h3>
                                        <h5 class="mb-0 font-weight-medium text-primary">Tipo de proyecto</h5>
                                        <p class="mb-0 text-muted">Ingreso libre</p>
                                    @else
                                        <h3 class="mb-0 font-weight-semibold"><i class="mdi mdi-36px mdi-folder-lock text-danger" title="Privado"></i> Privado</h3>
                                        <h5 class="mb-0 font-weight-medium text-primary">Tipo de proyecto</h5>
                                        <p class="mb-0 text-muted">Inscripción requerida</p>
                                    @endif
                                </div>
                            </div>
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