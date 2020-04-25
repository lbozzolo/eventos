@extends('layouts.app')

@section('content')

    <div class="card col-lg-12 grid-margin">
        <div class="card-body">
            <h1>Inscripciones / <span class="text-warning">Editar usuario</span></h1>
        </div>
    </div>

    <div class="card col-lg-12">
        <div class="card-body">

            <div class="row">
                <div class="card-body">
                    {!! Form::model($item, ['url' => route('users.inscripciones.update', $item->id), 'method' => 'patch']) !!}

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
