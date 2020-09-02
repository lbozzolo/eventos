@extends('web.layout-charla')

@section('content')

    <img src="{!! $charla->proyectos->first()->header->mainImage() !!}" width="100%"/>

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="text-black" style="display: inline-block">
                        <span class="text-azul-claro">Ingresar</span>
                    </h2>
                    <p class="text-black lead">{!! $charla->proyectos->first()->cliente->nombre !!} - {!! $charla->nombre !!}</p>

                </div>
                <div class="col-lg-12">



                    <form class="contact__form-panel" action="{{ route('web.post.sesion.grupo', $charla->id) }}" method="post">
{{--                    <form class="contact__form-panel" action="{{ route('web.login', $charla->proyectos->first()->id) }}" method="post">--}}

                        {!! csrf_field() !!}

                        <div class="row">
                            <div class="col-lg-12">
                                @include('vendor.flash.message')
                            </div>
                            <div class="col-sm-12 contact__form-panel-header">
                                <p class="lead">Ingresá tu email y tu DNI, Nº de pasaporte o ID.</p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="form-group"><input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" autofocus></div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="form-group"><input type="text" name="password" class="form-control" placeholder="DNI, pasaporte o ID"></div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <button type="submit" class="btn btn__primary btn__block">Siguiente</button>
                                <button title="Recuperar cuenta" type="button" data-toggle="modal" data-target="#recuperarCuenta" class="text-celeste-oscuro mt-2">¿Problemas para ingresar?</button>
                            </div>
                        </div>

                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="recuperarCuenta" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> ¿Problemas para ingresar?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                {!! Form::open(['url' => route('users.reenvio.de.datos'), 'method' => 'post']) !!}
                                <div class="modal-body">
                                    <p>Si tenés problemas para ingresar es posible que tus datos (email y dni) hayan sido registrados incorrectamente.</p>
                                    <p>Te enviaremos un email con los mismos para poder verificarlo. Recordá que para poder ver el evento debés identificarte ingresando los mismos.</p>
                                    <div class="form-group">
                                        {!! Form::label('email_recuperacion', 'Ingresá tu email') !!}
                                        {!! Form::email('email_recuperacion', null, ['class' => 'form-control', 'style' => 'width: 100%']) !!}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button title="Enviar" type="submit" class="btn btn-sm btn-primary">Enviar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="blog blog-single pb-0 pt-5" style="border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <section id="clients" class="clients pr-5 pl-5 pt-0 pb-5">
                        <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
                             data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">

                            @foreach($charla->proyectos->first()->auspiciantesShuffle() as $auspiciante)
                                <div class="client">
                                    <a href="{!! ($auspiciante->url)? $auspiciante->url : '#' !!}" title="{!! ($auspiciante->url)? $auspiciante->nombre : '' !!}" target="_blank">
                                        <img src="{!! $auspiciante->mainImage() !!}" alt="client">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')

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