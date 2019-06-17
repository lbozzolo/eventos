@extends('layouts.app')

@section('content')

    <div class="card col-lg-12">
        <div class="card-body">

            <h2 class="text-dark" style="font-size: 1.2em">{!! $receta->nombre !!}</h2>
            <h1>Preparación / <span class="text-warning">Agregar pasos</span></h1>
            <a href="{!! route('recetas.show', $receta->id) !!}" class="btn btn-outline-secondary">Volver</a>
            <div class="row">
                <div class="card-body">

                    @include($modelPlural.'.fields')

                </div>
            </div>

        </div>
    </div>

@endsection