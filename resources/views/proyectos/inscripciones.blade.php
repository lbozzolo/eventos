@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <span class="float-right">
                @include('proyectos.partials.buscador-inscripciones')
            </span>
            <h2 class="d-inline-block">
                Inscripciones /
                <span class="text-warning">{!! $proyecto->nombre !!}</span>
            </h2>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">

            @if($items->count())
                <div class="table-responsive">
                    @include('proyectos.table-inscripciones')
                </div>
            @else
                <span class="text-muted">No hay ningún inscripto cargado en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({})

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>

@endsection