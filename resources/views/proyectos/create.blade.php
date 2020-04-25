@extends('layouts.app')

@section('css')

    <style type="text/css">

        .datepicker {
            background-color: white;
            /*height: 30px !important;*/
            /*line-height: 30px !important;*/
            width: 290px !important;
            line-height:30px !important;
            padding:0px !important;
        }

    </style>

@endsection

@section('content')

    <div class="card col-lg-6">
        <div class="card-body">

            <h2>{!! ucfirst($modelSpanish) !!} / <span class="text-warning">Agregar</span></h2>

            {!! Form::open(['route' => $modelPlural.'.store', 'method' => 'post']) !!}

                <div class="row">
                    @include($modelPlural.'.fields')
                </div>

            {!! Form::close() !!}

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