@extends('web.layout')


@section('content')

    <section id="pageTitle" class="page-title page-title-layout6 bg-overlay bg-parallax text-center">
        <div class="bg-img"><img src="{!! asset('template-web/assets/images/page-titles/6.jpg') !!}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <h1 class="pagetitle__heading">Ponete en contacto</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
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

                            {!! Form::open(['url' => route('web.post.contact'), 'method' => 'post', 'class' => 'contact__form-panel']) !!}

                            <div class="row">
                                <div class="col-lg-12">
                                    @include('vendor.flash.message')
                                </div>
                                <div class="col-sm-12 contact__form-panel-header">
                                    <h4>Envianos tus datos</h4>
                                    <p>Y uno de nuestros asesores se pondrá en contacto para poder brindarte
                                        mayor información.</p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholdeer' => 'Nombre']) !!}
                                        {{--<input name="name" type="text" class="form-control" placeholder="Nombre">--}}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholdeer' => 'Email']) !!}
                                        {{--<input name="email" type="email" class="form-control" placeholder="Email">--}}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholdeer' => 'Teléfono']) !!}
                                        {{--<input name="phone" type="text" class="form-control" placeholder="Telefono">--}}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        {!! Form::text('company', null, ['class' => 'form-control', 'placeholdeer' => 'Empresa']) !!}
                                        {{--<input name="company" type="text" class="form-control" placeholder="Empresa">--}}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholdeer' => 'Comentario']) !!}
                                        {{--<textarea name="message" class="form-control" placeholder="Comentario"></textarea>--}}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {!! Recaptcha::render() !!}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn__secondary btn__block">
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