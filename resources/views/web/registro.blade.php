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
                        Registrate y obtené tu pase a esta charla y muchas más.<br>
                        <span class="text-celeste-oscuro">Sólo tendrás que registrarte una vez para inscribirte en todos los eventos que desees.</span>
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
                                <p class="cta__desc"><strong>Somo un equipo dispuesto a trabajar con vos y para vos los 365 días de
                                        09:00 AM - 19:00 PM</strong></p>
                                <div class="contact__number d-flex align-items-center">
                                    <i class="icon-phone"></i>
                                    <a href="tel:{!! config('sistema.data.phone') !!}">{!! config('sistema.data.phone') !!}</a>
                                </div>
                            </div>
                        </div>
                        {!! Form::open(['url' => route('web.post.registro', $charla->id), 'method' => 'post', 'class' => 'contact__form-panel']) !!}

                            <div class="row">
                                <div class="col-lg-12">
                                    @include('vendor.flash.message')
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
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
                                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'DNI']) !!}
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