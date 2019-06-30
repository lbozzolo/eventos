@extends('web.layout')


@section('content')

    <!-- Header  Inner style-->
    <section class="row final-inner-header">
        <div class="container">
            <h2 class="this-title">Reservas</h2>
        </div>
    </section>
    <!-- Header  Slider style-->

    <!-- Booking style-->
    <section class="container clearfix common-pad-inner booknow">
        <div class="sec-header">
            <h2>Realiza tu Pre-reserva</h2>
            <h3>Completa el Formulario y envialo para que podamos verificar la disponibilidad solicitada y podamos brindarte un mejor servicio.</h3>
        </div>

        <div class="row">


            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">

                <div class="book-left-content input_form">

                    @include('vendor.flash.message')

                    <form action="{!! route('pre.reserva') !!}" method="post" id="contactBooking">

                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Su Nombre">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Su Email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <input class="form-control datepicker-example8" placeholder="Fecha de Arribo" name="arival_date" type="text">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <input type="text" class="form-control datepicker-example8" placeholder="Fecha de Salida" name="departure_date">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">

                                <div class="select-box">
                                    <select class="select-menu" name="chooseAdults">
                                        <option value="default">Adultos</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <div class="select-box">
                                    <select class="select-menu" name="chooseChildren">
                                        <option value="default">Niños</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" rows="6" id="message" name="message" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button type="submit" class="res-btn">Consultar ahora</button></div>
                        </div>


                    </form>
                </div>


            </div>
            <div class="col-sm-4 pull-right">
                <div class="book-right">
                    <span><img src="{{ asset('template-web/images/booking/1.jpg') }}" alt=""></span>
                    <h2>Acerca de la Reserva</h2>
                    <p>Los datos enviados estarán sujetos a disponibilidad por parted e la Hostería. La misma verificará en sus sitemas y confirmará la disponibilidad o bien se pondrá en contacto con el cliente para poder brindar alguna otra opción en el caso de no poseer reserva para la fecha solicitada.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- Booking style-->








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