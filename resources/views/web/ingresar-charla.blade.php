@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    <section class="blog blog-single pb-0 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('vendor.flash.message')

                </div>
            </div>
        </div>
    </section>

    @if(\Carbon\Carbon::now()->addHours(1)->format('Y-m-d H:i') >= $charla->fecha_formatted_view)

        @if(\Carbon\Carbon::now()->format('Y-m-d H:i') < $charla->fecha_completa->addHours($charla->addHours)->format('Y-m-d H:i') && !$charla->videos->count())

            <section class="pb-40 pt-2">
                <div class="pl-2 pr-2">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-7">

                            @include('web.components.iframe')

                        </div>
                        <div class="col-lg-5">
                            <div style="margin-top: 0px; padding-top: 0px">

                                <div class="card-body">

                                    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                                        @foreach($charla->iframes as $iframe)
                                            <li class="nav-item">
                                                <a class="nav-link @if ($loop->first) active @endif  show" id="" data-toggle="pill" href="#iframe{!! $iframe->id !!}" role="tab"
                                                   aria-controls="pills-home" aria-selected="true">{!! $iframe->title !!}</a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <h4>
                                        <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span>
                                        - {!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})
                                    </h4>

                                    @include('web.components.consulta')

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        @else

            <section class="pb-40 pt-2">
                <div class="pl-2 pr-2">
                    <div class="row">
                        <div class="container">
                            <h4>
                                <span class="text-dark-green">Volver a ver - </span>
                                <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span>
                                - {!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})
                            </h4>
                            <p class="lead">Este evento ha finalizado pero podés volver a verlo acá.</p>
                        </div>
                    </div>
                </div>
            </section>

            @if($charla->videos->count())
                <section class="blog blog-single pb-5 pt-5" style="border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12">
                                @include('web.components.iframe-youtube')
                            </div>

                        </div>
                    </div>
                </section>
            @endif

        @endif

    @else

        <section class="pb-40 pt-2">
            <div class="pl-2 pr-2">
                <div class="row">
                    <div class="container">
                        <h4>
                            <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span>
                            - {!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})
                        </h4>
                        <p class="lead">Este evento comienza el {!! $charla->fecha !!} a las {!! $charla->hora !!} hs</p>
                    </div>
                </div>
            </div>
        </section>

    @endif

    <section class="blog blog-single pb-0 pt-5" style="border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('web.partials.auspiciantes')

                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5 pl-5 bg-celeste-oscuro text-white">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">

{{--                    @if($charla->publico)--}}
                    @if($charla->tipoProyecto() == 'Público')
                        <span class="text-azul-claro">Este evento es público.</span>
                    @else

                        @if(\Carbon\Carbon::now()->format('Y-m-d H:i') < $charla->fecha_completa->addHours($charla->addHours)->format('Y-m-d H:i') && !$charla->videos->count())
                            <span class="text-black">Estás inscripto a este evento.</span>
                        @else
                            <span class="text-black">Asististe a este evento.</span>
                        @endif

                    @endif

                    @include('web.components.info-evento')

                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-0 bg-celeste-claro text-azul-oscuro">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    @include('web.components.cerrar-sesion')
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')

    <script>

        $('.video_secondary').click(function () {

            let src = $(this).attr('data-url');

            console.log($(this).attr('src'));
            $('#video_primary').attr('src', src);

        });

        $("#btnSubmit").click(function () {
            setTimeout(function () { disableButton(); }, 0);
        });

        function disableButton() {
            $("#btnSubmit").prop('disabled', true);
        };


        $("#btnSubmit").click(function() {

            var iframe = $('#iframe').children("option:selected").val();

            $.ajax({
                type: 'post',
                url: '{!! route('proyectos.store.consulta') !!}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'nombre': $('input[name=nombre]').val(),
                    'email': $('input[name=email]').val(),
                    'texto': $('#texto').val(),
                    'proyecto_id': $('input[name=proyecto_id]').val(),
                    'iframe_id': iframe,
                },

                success: function(data) {

                    console.log(data);

                    if ((data.errors)) {

                        let errorString = [];
                        $.each( data.errors, function( key, value) {
                            if(value !== undefined){
                                errorString += '<li>' + value + '</li>';
                            }
                        });

                        console.log(data.errors);
                        console.log(errorString);

                        $('#message').text('');
                        $('#box-message').hide();

                        $('#error').html(
                            '<div class="alert alert-danger alert-dismissible" id="box-error">' +
                            '<button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>' +

                            '<ul>' +
                                errorString +
                            '</ul>' +


                            '</div>');
                        $("#btnSubmit").prop('disabled', false);

                    } else {

                        $('#error').text('');
                        $('#box-error').hide();
                        $('#message').html(
                            '<div class="alert alert-success alert-dismissible" id="box-message">' +
                            '<button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>' +
                             'Consulta realizada exitosamente' +
                            '</div>');

                        $('#nombre').val('');
                        $('#texto').val('');
                        $("#btnSubmit").prop('disabled', false);

                    }
                },
            });


        });


    </script>

@endsection