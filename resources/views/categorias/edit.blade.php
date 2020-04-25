@extends('layouts.app')

@section('content')

    <div class="card col-lg-6">
        <div class="card-body">

            <h1>
                {!! ucfirst($modelSpanish) !!} /
                <span class="text-warning">Editar</span>
            </h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($item, ['route' => [$modelPlural.'.update', $item->id], 'method' => 'patch']) !!}

                    @include($modelPlural.'.fields')

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>

@endsection