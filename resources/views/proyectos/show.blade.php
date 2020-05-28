@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card grid-margin">
                <div class="card-body">
                    <h2 class="mb-3">
                        <span class="text-dark">{!! $item->nombre !!}</span>
                    </h2>
                    <a href="{!! route($modelPlural.'.edit', ['id' => $item->id]) !!}" class="btn btn-outline-primary">Editar</a>
                    <a href="{!! route('headers.show', $item->header->id) !!}" class="btn btn-outline-success btn-sm">Configurar Header</a>
                    <a href="{!! route($modelPlural.'.consultas', $item->id) !!}" class="btn btn-outline-warning btn-sm">Consultas</a>
                    <a href="{!! route($modelPlural.'.reportes', $item->id) !!}" class="btn btn-outline-dark btn-sm">Reportes</a>
                </div>
            </div>
        </div>

        <div class="col-lg-7">

            <div class="card grid-margin">

                <div class="card-body">


                    <table class="table">
                        <tr>
                            <th style="width: 200px; border: none"></th>
                            <th style="border: none"></th>
                        </tr>
                        <tr>
                            <td class="text-right text-info">Descripción</td>
                            <td class="text-left">{!! $item->descripcion !!}</td>
                        </tr>
                        <tr>
                            <td class="text-right text-info">Cliente</td>
                            <td class="text-left">{!! $item->cliente->nombre !!}</td>
                        </tr>
                        <tr>
                            <td class="text-right text-info">Fecha</td>
                            <td class="text-left">
                                {!! $item->fecha !!} a las {!! $item->hora !!} hs
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right text-info">Estado</td>
                            <td class="text-left">
                                @if($item->estado->slug == 'activo')
                                    <span class="badge badge-success">{!! $item->estado->nombre !!}</span>
                                @else
                                    <span class="badge badge-danger">{!! $item->estado->nombre !!}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right text-info">Tipo</td>
                            <td class="text-left">
                                @if($item->publico)
                                    <i class="mdi mdi-24px mdi-folder-lock-open text-success" title="Público"></i> Público
                                @else
                                    <i class="mdi mdi-24px mdi-folder-lock text-danger" title="Privado"></i> Privado
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right text-info">Categorías</td>
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
                        <tr>
                            <td class="text-right text-info">Inscriptos</td>
                            <td class="text-left">
                                {!! $item->inscriptos->count() !!}
                                <a href="{!! route('proyectos.inscripciones', $item->id) !!}" class="btn btn-secondary btn-xs">listado</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-lg-5">

            @include('proyectos.partials.widget-images')
            @include('proyectos.partials.widget-pdf')
            @include('proyectos.partials.widget-iframes')
            @include('proyectos.partials.widget-videos')

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