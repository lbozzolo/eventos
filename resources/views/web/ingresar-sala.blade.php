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

    <section class="blog blog-grid bg-dark-green" id="alert-message" style="background-color: orange; display: @if($charla->isAlertMessage()) block @else none @endif">
        <div class="container">
            <div class="text__block">
                <h2 class="text__block-title text-white">Eventum informa</h2>
                <p class="text-azul-oscuro lead" id="alert_message_text">
                    {!! $charla->alert_message !!}
                </p>
            </div>
        </div>
    </section>

    @if(\Carbon\Carbon::now()->addHours(2)->format('Y-m-d H:i') >= $charla->fecha_formatted_view)

        {{--        @if(\Carbon\Carbon::now()->format('Y-m-d H:i') < $charla->fecha_completa->addHours($charla->addHours)->format('Y-m-d H:i') && !$charla->videos->count())--}}
        @if(\Carbon\Carbon::now()->format('Y-m-d H:i') < $charla->fecha_completa->addHours($charla->addHours)->format('Y-m-d H:i'))

            <section class="pb-40 pt-2">
                <div class="pl-2 pr-2">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-7">

                            @include('web.components.iframe-sala')

                        </div>
                        <div class="col-lg-5">
                            <div style="margin-top: 0px; padding-top: 0px">

                                <div class="card-body">



                                    <h4>
                                        <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span> -
                                        <span class="text-dark-green">{!! $sala->title !!}</span>
                                        <a class="ml-3" style="display: inline-block; font-size: 0.5em; font-family: Roboto" href="{!! route('web.charlas.ingresar', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}">cambiar de sala</a>
                                        <br>
                                        <span>{!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})</span>
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

        @if($charla->videos->count())
            <section class="blog blog-single pb-5 pt-5" style="border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            @include('web.components.iframe-youtube-pre-evento')
                        </div>

                    </div>
                </div>
            </section>
        @endif

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

        // Consulta de mensajes de alerta
        window.setInterval(function(){

            $.ajax({
                type: 'post',
                url: '{!! route('proyectos.get.alert.message') !!}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'proyecto_id': $('input[name=proyecto_id]').val(),
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

                    } else {

                        if(data === 'off'){
                            $('#alert-message').hide();
                        } else {
                            $('#alert-message').show();
                            $('#alert_message_text').text(data);
                        }

                    }
                },
            });

        },300000);

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

        $('.sala').click(function () {

            let iframeid = $(this).attr('data-id');
            console.log(iframeid);
            $('#iframeid').val(iframeid);

        });

        $("#btnSubmit").click(function() {

            var iframe = $('#iframe').children("option:selected").val();
            var iframeid = $('#iframeid').val();

            $.ajax({
                type: 'post',
                url: '{!! route('proyectos.store.consulta') !!}',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'nombre': $('input[name=nombre]').val(),
                    'email': $('input[name=email]').val(),
                    'texto': $('#texto').val(),
                    'proyecto_id': $('input[name=proyecto_id]').val(),
                    'iframe_id': iframeid,
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

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                email: "soporte@eventum.com.ar", // Email
                call_to_action: "Eventum Soporte", // Call to action
                button_color: "#97B128", // Color of button
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

@endsection