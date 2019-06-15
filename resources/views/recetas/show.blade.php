@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>
                {!! ucfirst($modelPlural) !!} /
                <span class="text-warning"> # {!! $item->id !!}</span>
            </h1>

            @include('recetas.show_fields')

        </div>
    </div>

@endsection
