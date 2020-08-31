@extends('layouts.app')

@section('content')

    @can('mostrar_grupos')
        <div class="row">
            <div class="col-lg-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            Grupo de eventos -  <span class="text-warning">{!! $item->nombre !!}</span>
                        </h2>
                        <a href="{!! route('grupos.index') !!}" class="btn btn-outline-dark">Volver</a>
                        @can('editar_grupos')
                        <a href="{!! route('grupos.edit', $item->id) !!}" class="btn btn-outline-primary"><i class="mdi mdi-pencil"> </i> Editar</a>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mb-4">Eventos asignados a este grupo de eventos</h4>
                        <div class="row">

                            @forelse($item->proyectos as $proyecto)
                                <div class="col-lg-2 stretch-card grid-margin">
                                    <div class="card project">
                                        <a href="{!! route('proyectos.show', $proyecto->id) !!}">
                                            <img src="{!! $proyecto->mainImage() !!}" alt="{!! ($proyecto->nombre)? $proyecto->nombre : '-' !!}" style="width: 100%; height: auto"><br><br>
                                            <div style="padding: 10px 20px">
                                                <p class="text-black">{!! ($proyecto->nombre)? $proyecto->nombre : '-' !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endcan

@endsection

@section('js')

    <script>

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('.select2').select2({
            multiple: true
        })

    </script>

@endsection