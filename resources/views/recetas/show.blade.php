@extends('layouts.app')

@section('css')

    <style type="text/css">

        .container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
        }
        .video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .modal-dialog{
            position: relative;
            display: table; /* This is important */
            overflow-y: auto;
            overflow-x: auto;
            width: auto;
            min-width: 300px;
            max-width: 100%;
        }

    </style>

@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h2>
                {!! ucfirst($modelPlural) !!} /
                <span class="text-warning"> # {!! $item->id !!}</span> /
                <span class="text-info display-4"> {!! $item->nombre !!}</span>
            </h2>
            <div>
                <p>{!! ($item->descripcion)? $item->descripcion : '' !!}</p>

                @if($item->active)
                    <label class="badge badge-success">{!! ($gender == 'M')? 'activo' : 'activa' !!}</label>
                @else
                    <label class="badge badge-danger">{!! ($gender == 'M')? 'inactivo' : 'inactiva' !!}</label>
                @endif
                <label class="badge badge-dark"><i class="mdi mdi-clock"></i> {!! $item->tiempo !!} {!! ($item->tiempo > 1)? 'minutos' : 'minuto' !!}</label>
                <small class="mr-2" style="padding: 5px">creada el {!! $item->fecha_creado !!}</small>
                <a href="{!! route($modelPlural.'.edit', $item->id) !!}" class="btn btn-outline-primary btn-sm">editar</a>

            </div>

        </div>
    </div>

    @include('recetas.show_fields')

@endsection
