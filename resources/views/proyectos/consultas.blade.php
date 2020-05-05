@extends('layouts.app')

@section('content')

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <p class="float-right">Fecha del evento: {!! $item->fecha !!} a las {!! $item->hora !!}</p>
            <h2>{!! ucfirst($item->nombre) !!} / <span class="text-warning">{!! $item->cliente->nombre !!}</span></h2>
            <p class="lead">{!! $item->descripcion !!}</p>
        </div>
    </div>

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <h3>Consultas</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7">
            <div class="card card-body">

                <h4 class="card-body">Recientes</h4>
                <ul>
                    @forelse($item->consultasRecientes()->sortByDesc('id') as $consulta)
                        <li class="list-unstyled">

                            <div class="card grid-margin">
                                <div class="card-header">
                                    <span class="float-right">{!! ($consulta->email)? $consulta->email : '' !!}</span>
                                    <span>
                                        {!! ucfirst($consulta->nombre) !!}
                                    </span>
                                </div>
                                <div class="card-body">
                                    {!! ucfirst($consulta->texto) !!}
                                </div>
                                <div class="card-footer">
                                    <div class='float-right'>
                                        <a href="{!! route('proyectos.consultas.archivar', [$consulta->id]) !!}" class='btn btn-dark btn-xs' title="Archivar">
                                            archivar</a>
                                        <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $consulta->id !!}" class="btn btn-xs btn-danger">
                                            eliminar</button>
                                    </div>
                                    <span>
                                        {!! $consulta->fecha_creado !!} • {!! $consulta->hora_creado !!}
                                    </span>
                                </div>
                            </div>

                        </li>
                    @empty
                        <td colspan="2">
                            <em class="text-gray">Todavía no se han hecho consultas en este evento.</em>
                        </td>
                    @endforelse
                </ul>

            </div>

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

        <div class="col-lg-5">
            <div class="card card-body bg-light">

                <h4 class="card-body">Archivadas</h4>
                <ul class="list-unstyled">
                    @forelse($item->consultasArchivadas()->sortByDesc('id') as $consulta)
                        <li>

                            <div class="card grid-margin">
                                <div class="card-header">
                                    <span class="float-right">{!! ($consulta->email)? $consulta->email : '' !!}</span>
                                    <span>
                                        {!! ucfirst($consulta->nombre) !!}
                                    </span>
                                </div>
                                <div class="card-body">
                                    {!! ucfirst($consulta->texto) !!}
                                </div>
                                <div class="card-footer">
                                    <div class='float-right'>
                                        <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $consulta->id !!}" class="btn btn-xs btn-danger">
                                            eliminar</button>
                                    </div>
                                    <span>
                                        {!! $consulta->fecha_creado !!} • {!! $consulta->hora_creado !!}
                                    </span>
                                </div>
                            </div>

                        </li>
                    @empty
                        <td colspan="2">
                            <em class="text-gray">Todavía no hay consultas archivadas.</em>
                        </td>
                    @endforelse
                </ul>

            </div>
        </div>

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

@endsection

@section('js')

    <script>

        window.setTimeout(function(){
            location.reload()
        },15000);

    </script>

@endsection