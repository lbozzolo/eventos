@extends('web.layout')


@section('content')

    @if(isset($slider))
        @include('web.partials.sliders')
    @endif

    @include('web.partials.sliders')

    <section class="container clearfix common-pad nasir-style">
        <div class="sec-header sec-header-pad">
            <h2>Nuestras Habitaciones</h2>
            <br>
        </div>
        <div class="room-slider">
            <div class="roomsuite-slider-two">

                <div class="room-suite room-suite-htwo">
                    <div class="item">
                        <div class="ro-img"><img src="{{ asset('template-web/images/rooms/8.jpg') }}" class="img-responsive" alt=""></div>
                        <div class="ro-txt">
                            <h2>Habitación Doble</h2>
                            <div class="ro-text-two">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-suite room-suite-htwo">
                    <div class="item">
                        <div class="ro-img"><img src="{{ asset('template-web/images/rooms/9.jpg') }}" class="img-responsive" alt=""></div>
                        <div class="ro-txt">
                            <h2>Habitación Triple</h2>
                            <div class="ro-text-two">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-suite room-suite-htwo">
                    <div class="item">
                        <div class="ro-img"><img src="{{ asset('template-web/images/rooms/10.jpg') }}" class="img-responsive" alt=""></div>
                        <div class="ro-txt">
                            <h2>Habitación Cuadruple</h2>
                            <div class="ro-text-two">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-suite room-suite-htwo">
                    <div class="item">
                        <div class="ro-img"><img src="{{ asset('template-web/images/rooms/11.jpg') }}" class="img-responsive" alt=""></div>
                        <div class="ro-txt">
                            <h2>Habitación Sextuple</h2>
                            <div class="ro-text-two">

                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>

    <!-- Counter style-->



    <!-- Get in Touch & Drop a Message style   -->
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