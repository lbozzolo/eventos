@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card grid-margin">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-sm-6">
                        <div class="card-body">
                            <h2>
                                <span class="text-dark">{!! $item->nombre !!}</span>
                                / <span class="text-warning">Consultas</span>
                            </h2>
                            <p>{!! ($item->descripcion)? $item->descripcion : '' !!}</p>

                            @role('Superadmin|Admin')
                            <a href="{!! route($modelPlural.'.show', $item->id) !!}" class="btn btn-outline-dark mb-1">Volver</a>
                            @endrole

                            @role('Cliente')
                            <a href="{!! route('clientes.profile', Auth::user()->id) !!}" class="btn btn-outline-dark mb-1">Volver</a>
                            @endrole

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
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-lg-8">
            <h4 class="card card-body" style="border-top: 3px solid darkcyan">Recientes ({!! $item->consultasRecientes()->count() !!})</h4>
        </div>
        <div class="col-lg-4">
            <h4 class="card card-body ml-3" style="border-top: 3px solid orange">Archivadas ({!! $item->consultasArchivadas()->count() !!})</h4>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

                    <ul class="list-unstyled">
                        @forelse($item->consultasRecientes()->sortByDesc('id') as $consulta)
                            <li style="border-bottom: 1px solid lightgray">
                                <div class="card-body">
                                    <p>
                                        <strong>{!! ucfirst($consulta->nombre) !!}</strong>
                                        <span class="ml-3 text-dark">{!! $consulta->fecha_creado !!} • {!! $consulta->hora_creado !!}</span>
                                    </p>

                                    <p>{!! ucfirst($consulta->texto) !!}</p>
                                    <span class="text-gray">{!! ($consulta->email)? $consulta->email : '' !!}</span>
                                    <span class="float-right">

                                        <span title="Eliminar" data-toggle="modal" data-target="#delete{!! $consulta->id !!}" class="text-danger mr-3" style="cursor: pointer">
                                            eliminar
                                            <i class="mdi mdi-delete mdi-18px"></i>
                                        </span>
                                        <a href="{!! route('proyectos.consultas.archivar', [$consulta->id]) !!}" class='text-dark' title="Archivar">
                                            archivar
                                            <i class="mdi mdi-clipboard-check mdi-18px"></i>
                                        </a>
                                    </span>
                                </div>
                            </li>
                        @empty
                            <li>
                                <em class="text-gray">No hay consultas por el momento.</em>
                            </li>
                        @endforelse
                    </ul>

                    @foreach($item->consultasRecientes()->sortByDesc('id') as $consulta)

                    <!-- Modal -->
                        <div class="modal fade" id="delete{!! $consulta->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar consulta</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Desea eliminar esta consulta?</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open(['route' => ['proyectos.consultas.destroy', $consulta->id], 'method' => 'delete']) !!}

                                        <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="" style="height: 800px; overflow: scroll">
                <div class="card-body pt-0 pr-0">

                    <ul class="list-unstyled">
                        @forelse($item->consultasArchivadas()->sortByDesc('id') as $consulta)

                            <li class="mb-3">
                                <div class="card card-body" style="border-left: 2px solid orange">
                                    <p>
                                        <strong>{!! ucfirst($consulta->nombre) !!}</strong>
                                        <span class="ml-3 text-dark">{!! $consulta->fecha_creado !!} • {!! $consulta->hora_creado !!}</span>
                                    </p>

                                    <p>{!! ucfirst($consulta->texto) !!}</p>
                                    <span class="text-gray">{!! ($consulta->email)? $consulta->email : '' !!}</span>
                                    <span class="float-right">

                                        <span title="Eliminar" data-toggle="modal" data-target="#delete{!! $consulta->id !!}" class="text-danger mr-3" style="cursor: pointer">
                                            eliminar
                                            <i class="mdi mdi-delete mdi-18px"></i>
                                        </span>
                                    </span>
                                </div>
                            </li>

                        @empty
                            <td colspan="2">
                                <em class="text-gray">No hay consultas archivadas.</em>
                            </td>
                        @endforelse
                    </ul>

                    @foreach($item->consultasArchivadas()->sortByDesc('id') as $consulta)

                    <!-- Modal -->
                        <div class="modal fade" id="delete{!! $consulta->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar consulta</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Desea eliminar esta consulta?</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open(['route' => ['proyectos.consultas.destroy', $consulta->id], 'method' => 'delete']) !!}

                                        <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>


    </div>

@endsection

@section('js')

    <script>

        window.setTimeout(function(){
            location.reload()
        },15000);

    </script>

@endsection