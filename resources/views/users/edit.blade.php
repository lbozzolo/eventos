@extends('layouts.app')

@section('content')

    <div class="card col-lg-6">
        <div class="card-body">

            <h1>
                Usuario /
                <span class="text-warning">Editar</span>
            </h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                    @include('users.fields')

                    {!! Form::close() !!}

                </div>
            </div>

            @if(Auth::user()->isSuperadmin())
            <div class="row">
                <div class="card-body">

                    {!! Form::model($user, ['route' => ['users.change.password.other', $user->id], 'method' => 'put']) !!}
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('new_password', 'Blanqueo de contraseña:') !!}
                        {!! Form::text('new_password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aquí la nueva contraseña']) !!}
                    </div>
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::submit('Blanquear', ['class' => 'btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
            @endif

        </div>
    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: true
        });

    </script>

@endsection