@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h2 class="d-inline-block">
                {!! $item->nombre !!}
                /
                <span class="text-warning">Inscripciones</span>

            </h2>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">

{{--            @include('users.partials.buscador-inscripciones')--}}

            <hr>

            @if($items->count())
                <div class="table-responsive">
                    @include('users.table-inscripciones')
                </div>
            @else
                <span class="text-muted">No hay ningún inscripto cargado en el sistema.</span>
            @endif

        </div>
    </div>

@endsection

@section('js')

    <script>

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });


        function isOnline() {

            var url = '{!! route('users.is.connected') !!}';

            $(".user").map(function() {

                let id = $(this).attr('id');

                $.ajax(
                    {
                        type : 'get',
                        url : url,
                        dataType : 'json',
                        data : {
                            'user_id': id
                        },
                        success : function(data) {

                            let icono = $('#'+ id + ' i');
                            icono.removeClass();

                            if(data.status === 'connected'){
                                icono.addClass('mdi mdi-checkbox-blank-circle text-success')
                            } else {
                                icono.addClass('mdi mdi-checkbox-blank-circle-outline text-danger')
                            }

                        },
                    });

            }).get();

        }

        isOnline();
        setInterval(function(){ isOnline(); }, 30000);

    </script>


@endsection