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
                                <p class="cta__desc"><strong>Somo un equipo dispuesto a trabajar con vos y para vos los 365 días de
                                        09:00 AM - 19:00 PM</strong></p>
                                <div class="contact__number d-flex align-items-center">
                                    <i class="icon-phone"></i>
                                    <a href="tel:5565454117">55 654 541 17</a>
                                </div>
                            </div>
                        </div>
                        <form class="contact__form-panel">
                            <div class="row">
                                <div class="col-sm-12 contact__form-panel-header">
                                    <h4>Envianos tus datos</h4>
                                    <p>Y uno de nuestros asesores se pondrá en contacto para poder brindarte
                                        mayor información.</p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Nombre"></div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Telefono"></div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Empresa"></div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Comentario"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn__secondary btn__block">
                                        <span>Enviar Informacion</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection