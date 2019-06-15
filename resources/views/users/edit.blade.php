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

        </div>
    </div>

@endsection