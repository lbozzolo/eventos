@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h2 class="d-inline-block">
                Inscripciones
                @if(isset($proyectoActual)) /
                    <span class="text-warning">{!! $proyectoActual !!}</span>
                @endif
            </h2>
            <a class="btn btn-primary btn-sm ml-3" href="{!! route('users.inscribir') !!}">Inscribir</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">

            @include('users.partials.buscador-inscripciones')

            <hr>

            @if($items->count())
                <div class="table-responsive">
                    @include('users.table-inscripciones')
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