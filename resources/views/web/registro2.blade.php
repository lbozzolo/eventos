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
                                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {!! Form::select('pais', $paises, null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 30px">
                                    <div class="form-group">
                                        {!! Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Localidad, Provincia']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {!! Form::text('ocupacion', null, ['class' => 'form-control', 'placeholder' => 'Ocupación']) !!}
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