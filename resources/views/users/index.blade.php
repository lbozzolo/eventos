@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h2>
                Usuarios
                <a class="btn btn-primary btn-sm" href="{!! route('users.create') !!}">Agregar</a>
            </h2>

        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">

            @if($users->count())
                <div class="table-responsive">
                    @include('users.table')
                </div>
            @else
                <span class="text-muted">No hay ningún usuario cargado en el sistema.</span>
            @endif

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