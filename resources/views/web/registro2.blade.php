@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="col-lg-12">
            @include('web.components.cerrar-sesion')
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="text-black">
                        <span class="text-azul-claro">Registro</span>
                        - {!! $charla->nombre !!} / {!! $charla->cliente->nombre !!}
                    </h2>

                    <p class="lead">
                        Estás a un solo paso de inscribirte.<br>
                        <span class="text-celeste-oscuro h4">Sólo necesitamos saber un poco más de vos.</span>
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section id="contactLayout1" class="contact contact-layout1 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="contact__panel">
                        <div class="contact__panel-banner">
                            <img src="{!! asset('template-web/assets/images/banners/2.jpg') !!}" alt="banner img">
                            <div class="cta__banner">
                                <p class="cta__desc"><strong>Somos Eventum. Convertimos tu necesidad en realidad.</strong></p>
                                <div class="contact__number d-flex align-items-center">
                                    <i class="icon-phone"></i>
                                    <a href="tel:{!! config('sistema.data.phone') !!}">{!! config('sistema.data.phone') !!}</a>
                                </div>
                            </div>
                        </div>
                        {!! Form::open(['url' => route('web.post.registro.2', $charla->id), 'method' => 'post', 'class' => 'contact__form-panel']) !!}

                            {!! Form::hidden('user_id', $user->id) !!}

                            <div class="row">
                                <div class="col-lg-12">
                                    @include('vendor.flash.message')
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <p class="text-right">
                                        ¿Ya está registrado?
                                        <a href="{!! route('web.iniciar-sesion', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}">Inicie sesión</a>
                                    </p>
                                    <div class="form-group">
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'autofocus']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        @if($user->email)
                                        <p class="text-success">¿Es correcto este email?</p>
                                        @endif
                                        {!! Form::email('email', ($user->email)? $user->email : null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        @if($user->dni)
                                            <p class="text-success">¿Es correcto este DNI, pasaporte o ID?</p>
                                        @endif
                                        {!! Form::number('dni', ($user->dni)? $user->dni : null, ['class' => 'form-control', 'placeholder' => 'DNI, pasaporte o ID']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {!! Form::select('pais', $paises, null, ['class' => 'form-control', 'id' => 'paises', 'style' => 'width: 100%']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 30px">
                                    <div class="form-group">
                                        {!! Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Localidad, Provincia']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-4" style="border: 1px solid lightgray; border-radius: 15px">
                                    <div class="form-group" style="margin-top: 10px; margin-bottom: 80px">
                                        <p class="text-center" style="font-size: 1.2em">Ocupación</p>
                                        {!! Form::select('ocupacion_id', $ocupaciones, null, ['class' => 'form-control', 'placeholder' => '', 'id' => 'ocupacionSelect']) !!}
                                    </div>
                                    <p id="otraOcupacion" class="text-primary pl-3" style="cursor: pointer">Otra ocupación</p>
                                    <div class="form-group" style="display: none" id="ocupacionTexto">
                                        {!! Form::text('ocupacion', null, ['class' => 'form-control', 'placeholder' => 'Especifique otra...', 'id' => 'otraOcupacionInput']) !!}
                                    </div>
                                </div>
                                {{--<div class="col-sm-12 col-md-12 col-lg-12">--}}
                                    {{--<div class="form-group">--}}
                                        {{--{!! Form::text('ocupacion', null, ['class' => 'form-control', 'placeholder' => 'Ocupación']) !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <span class="text-black">Deseo suscribirme al newsletter</span>
                                        {!! Form::checkbox('newsletter', true, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn__primary btn__block">
                                        <span>Enviar Informacion</span>
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')

    <script>

        $('#otraOcupacion').click(function () {
            $('#ocupacionTexto').show();
            $('#otraOcupacionInput').focus();
            $('#ocupacionSelect').hide();
            $('#otraOcupacion').hide();
        });

    </script>

    <script>

        $('#paises').select2({

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