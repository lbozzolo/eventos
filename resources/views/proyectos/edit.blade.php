@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-8">
            <div class="card">

                <div class="card-body">

                    <h2 class="mb-3">
                        {!! $item->nombre !!} /
                        <span class="text-warning">Editar</span>
                    </h2>
                    <a href="{!! route('headers.show', $item->header->id) !!}" class="btn btn-outline-success btn-sm">Configurar Header</a>
{{--                    <a href="{!! route('proyectos.encuestas', $item->id) !!}" class="btn btn-outline-primary btn-sm">Configurar Encuestas</a>--}}

                    <div class="row">
                        <div class="card-body">

                            @if($item->estado->slug == 'inactivo')
                                <p class="badge-danger text-center">Este proyecto se encuentra inactivo en la plataforma</p>
                            @endif

                            {!! Form::model($item, ['route' => [$modelPlural.'.update', $item->id], 'method' => 'patch']) !!}

                            <div class="row">
                                @include($modelPlural.'.fields')
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: false
        });

        $('.select2m').select2({
            multiple: true
        });

        flatpickr('#flatpickr', {
            enableTime: true,
            dateFormat: 'd-m-Y H:i',
            time_24hr: true
        });

    </script>

@endsection