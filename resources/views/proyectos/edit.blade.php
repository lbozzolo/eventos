@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">

                    <h2 class="mb-3">
                        {!! ucfirst($modelSpanish) !!} /
                        <span class="text-warning">Editar</span>
                    </h2>
                    <a href="{!! route('headers.show', $item->header->id) !!}" class="btn btn-outline-primary btn-sm">Configurar Header</a>
                    <div class="row">
                        <div class="card-body">

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

        <div class="col-lg-6">

            @include('proyectos.partials.widget-images')
            @include('proyectos.partials.widget-pdf')
            @include('proyectos.partials.widget-iframes')
            @include('proyectos.partials.widget-videos')

        </div>

    </div>

@endsection

@section('js')

    <script>

        $('.select2').select2({
            multiple: true
        });

        flatpickr('#flatpickr', {
            enableTime: true,
            dateFormat: 'd-m-Y h:i'
        });

    </script>

@endsection