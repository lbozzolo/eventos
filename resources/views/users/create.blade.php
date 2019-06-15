@extends('layouts.app')

@section('content')

    <div class="card col-lg-6">
        <div class="card-body">

            <h1>Usuario / <span class="text-warning">Agregar</span></h1>
            <div class="row">
                <div class="card-body">
                    {!! Form::open(['route' => 'users.store']) !!}

                    <div class="form-group col-lg-12">
                        {!! Form::label('password', 'Ingrese una contraseña provisoria (máximo 6 caracteres)') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'maxlength' => '6']) !!}
                    </div>

                    @include('users.fields')

                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>


@endsection
