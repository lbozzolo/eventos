@extends('web.layout')


@section('content')

    <!-- Booking style-->
    <section class="container clearfix common-pad booknow">
        <div class="sec-header">
            <h2>Envianos un Mensaje</h2>
            <h3>Completa el formulario y nos pondremos en contacto contigo a la breevedad.</h3>
        </div>

        <div class="row nasir-contact">
            <div class="col-md-8">

                <div class="book-left-content input_form">

                    @include('vendor.flash.message')

                    <form action="{!! route('web.post.contact') !!}" method="post" id="contactFormulario">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <span>Tu Nombre</span>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <span>Tu Email</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span>Motivo</span>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Motivo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span>Comentario</span>
                                <textarea class="form-control" rows="6" id="message" name="message" placeholder="Comentario"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button type="submit" class="res-btn">Enviarlo ahora</button></div>
                        </div>
                    </form>
                    <div id="success"><p>Tu mensaje fue enviado correctamente.</p></div>
                    <div id="error"><p>Chequea el formulario, tu mensaje no fue enviado!</p></div>
                </div>


            </div>
            <div class="col-md-4">

                <div class="contact-info">

                    <h2>Información de Contacto</h2>

                    <div class="media-contact clearfix">
                        <div class="media-contact-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="media-contact-info">
                            <p>8 de Abril S/n, Caviahue, Neuquén</p>
                        </div>
                    </div>
                    <div class="media-contact clearfix">
                        <div class="media-contact-icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="media-contact-info">
                            <p>
                                <a href="mailto:info@kallfu.com">info@kallfu.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="media-contact clearfix">
                        <div class="media-contact-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-contact-info">
                            <p>Lunes a Viernes : 8.00am to 5.00 pm<br>
                            </p>
                        </div>
                    </div>

                    <div class="media-contact clearfix">
                        <div class="media-contact-icon">
                            <i class="icon icon-Timer" aria-hidden="true"></i>
                        </div>
                        <div class="media-contact-info">
                            <p>
                                <a href="tel:02948495080"><i>02948 49-5080</i></a><br>
                            </p>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </section>

    <!-- Booking style-->

    <!-- TT-CONTACT-MAP -->
    <div class="google-maps" style="width: 100%">
        <iframe width="100%" height="700px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6298.975971304549!2d-71.0660892116049!3d-37.872269135183934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966d044bc31b518b%3A0x2becf5356fb9f580!2s8+de+Abril%2C+Caviahue%2C+Neuqu%C3%A9n!5e0!3m2!1ses-419!2sar!4v1561036641780!5m2!1ses-419!2sar" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- Welcome banner  style-->
    <div class="nasir-subscribe-form-row row">
        <div class="container">
            <div class="row this-dashed">
                <div class="this-texts">
                    <h2>MANTENTE INFORMADO  </h2>
                    <h3>Recibe todas las noticias y novedades!!</h3>
                </div>
                <form class="this-form input-group" action="#" method="post">
                    <input type="email" class="form-control" placeholder="Ingrese una dirección de mail">
                    <span class="input-group-addon">
                    <button type="submit" class="res-btn">Subscribirse</button>
                </span>
                </form>
            </div>
        </div>
    </div>

@endsection