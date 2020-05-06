@extends('layouts.app')

@section('content')

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <h2>Inscripciones / <span class="text-warning">Inscribir</span></h2>
            <a class="btn btn-outline-primary btn-sm ml-3" href="{!! route('users.inscribir.desde.usuarios') !!}">Inscribir desde lista de usuarios</a>
        </div>
    </div>

    <div class="card col-lg-12">
        <div class="card-body">

            <div class="row">
                <div class="card-body">
                    {!! Form::open(['route' => 'users.inscripciones.store']) !!}

                    @include('users.inscribir-fields')

                    {!! Form::close() !!}
                </div>

            </div>

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
