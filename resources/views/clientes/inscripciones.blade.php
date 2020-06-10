@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h2 class="d-inline-block">
                {!! $item->nombre !!}
                /
                <span class="text-warning">Inscripciones</span>

            </h2>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">

{{--            @include('users.partials.buscador-inscripciones')--}}

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