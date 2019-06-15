@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>
                Revistas /
                <span class="text-warning">Edición # {!! $item->number !!}</span>
            </h1>

            @include('recetas.show_fields')

        </div>
    </div>

@endsection
