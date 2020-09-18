@extends('web.layout-charla')

@section('content')

    <img src="{!! $charla->proyectos->first()->header->mainImage() !!}" width="100%"/>

    <section class="blog blog-single pb-5 pt-5 bg-light">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="text-black">
                        <span class="text-azul-claro">Registro</span>
                        - {!! $charla->nombre !!} / {!! $charla->proyectos->first()->cliente->nombre !!}
                    </h2>

                    <p class="lead">
                        Registrate y obtené tu pase a este evento y muchos más.<br>
                        <span class="text-celeste-oscuro h4">Sólo tendrás que registrarte una vez para inscribirte en todos los eventos que desees.</span>
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
                        {!! Form::open(['url' => route('web.post.registro.grupo.logueado', $charla->id), 'method' => 'post', 'class' => 'contact__form-panel']) !!}

                        <div class="row">
                            <div class="col-lg-12">
                                @include('vendor.flash.message')
                            </div>
                            <h3>¿A qué eventos querés inscribirte?</h3>
                            @if($charla->proyectos->count())
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">

                                        <ul>
                                            @foreach($charla->proyectos as $proyecto)
                                                @if(!$proyecto->isInactive())
                                                <li class="list-group-item">
                                                    <label for="proyecto{!! $proyecto->id !!}">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                                <img src="{!! $proyecto->mainImage() !!}" alt="blog image">
                                                            </div>
                                                            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-6">
                                                                <span class="float-right">
                                                                    <input type="checkbox" class="check-proyecto" name="proyectos[]" value="{!! $proyecto->id !!}" id="proyecto{!! $proyecto->id !!}">
                                                                </span>
                                                                <div>
                                                                    <span>{!! $proyecto->nombre !!}</span><br>
                                                                    <p style="font-family: Roboto;">{!! $proyecto->descripcion !!}</p>
                                                                    <span class="blog__meta-date">{!! $proyecto->fecha_formatted !!} hs</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            @endif
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn__primary btn__block">
                                    <span>Inscribirse</span>
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

        $('.check-proyecto').click(function () {
            if($(this).is(':checked')){
                $(this).parent().parent().parent().parent().parent().css('background-color', 'whitesmoke')
            } else {
                $(this).parent().parent().parent().parent().parent().css('background-color', 'white')
            }

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