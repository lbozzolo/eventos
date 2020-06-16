@extends('layouts.app')

@section('css')

    <style type="text/css">

        .table td img, .table th img {
            border-radius: 0!important;
        }

        .table td a:hover {
            text-decoration: none;
            opacity: 0.6;
        }

    </style>

@endsection

@section('content')

    <div class="card">
        <div class="card-body">

            <h2>
                {!! ucfirst($modelSpanishPlural) !!}
                <a class="btn btn-primary btn-sm" href="{!! route($modelPlural.'.create') !!}">Agregar</a>
            </h2>

        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">

            @if($items->count())
                <div class="table-responsive">
                    @include($modelPlural.'.table')
                </div>
            @else
                <span class="text-muted">No hay {!! $modelSpanishPlural !!} en el sistema.</span>
            @endif

        </div>
    </div>

@endsection