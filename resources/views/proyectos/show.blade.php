@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-6">
            <div class="card grid-margin">

                <div class="card-body">

                    <h2 class="mb-3">
                        {!! ucfirst($modelSpanish) !!} /
                        <span class="text-warning">{!! $item->nombre !!}</span>
                    </h2>
                    <a href="{!! route($modelPlural.'.edit', $item->id) !!}" class="btn btn-outline-primary">Editar</a>
                    <a href="{!! route('headers.show', $item->header->id) !!}" class="btn btn-outline-success btn-sm">Configurar Header</a>
                    <a href="{!! route($modelPlural.'.consultas', $item->id) !!}" class="btn btn-outline-warning btn-sm">Consultas</a>
                    <table class="table">
                       <tr>
                           <td style="width: 200px; border: none"></td>
                           <td style="border: none"></td>
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
                            <td class="text-left">{!! $item->fecha !!}</td>
                        </tr>
                        <tr>
                            <td class="text-right text-info">Hora</td>
                            <td class="text-left">{!! $item->hora !!}</td>
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
                                    <span class="badge badge-primary">Público</span>
                                @else
                                    <span class="badge badge-danger">Privado</span>
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
                                <a href="{!! route('proyectos.inscripciones', $item->id) !!}" class="btn btn-default">ver</a>
                           </td>
                       </tr>
                    </table>

                </div>

            </div>

        </div>

        <div class="col-lg-6">

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