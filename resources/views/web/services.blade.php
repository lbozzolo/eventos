@extends('web.layout')


@section('content')

    <section class="row final-inner-header">
        <div class="container">
            <h2 class="this-title">Nuestros Servicios</h2>
        </div>
    </section>

    <section class="container clearfix common-pad-inner about-info-box">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">

                <div class="sec-header">
                    <h2>Servicios que ofrecemos en nuestra Hostería</h2>
                    <br><br>
                </div>
                <p>Kallfu brinda todas las comodidades para una agradable estadía permitiéndole a los pasajeros disfrutar desde el primer día.</p>
                <p>En cualquiera de las alternativas que elija para alojarse, en Kallfu Ud. dispone de baño privado, agua caliente, aire acondicionado frío/calor, Internet Wi Fi, teléfonos internos, cofre guarda valores, servicio de limpieza y cochera. En el caso de viajar con bebés también dispondrá de cuna o moisés, bañera y silla alta</p>
            </div>
        </div>
    </section>

    <section class="clearfix news-wrapper">
        <div class="container clearfix common-pad-room">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 aminities-wrapper">
                    <div class="sec-header-small">

                        @foreach($services as $chunk)

                            <div class="aminities-outer">
                                <ul>
                                    @foreach($chunk as $service)
                                        <li>
                                            <div class="view view-aminities">
                                                @if($service->mainImageThumb())
                                                    <img src="{{ route('imagenes.ver', $service->mainImageThumb()->path) }}">
                                                @else
                                                    <img src="{!! asset('images/noimage.png') !!}" style="width: 64px">
                                                @endif
                                                <h2>{!! $service->name !!}</h2>
                                                <p>{!! $service->description !!}</p>
                                                <div class="mask">
                                                    @if($service->mainImageThumb())
                                                        <img src="{{ route('imagenes.ver', $service->mainImageThumb()->path) }}">
                                                    @else
                                                        <img src="{!! asset('images/noimage.png') !!}" style="width: 64px">
                                                    @endif
                                                    <h2>{!! $service->name !!}</h2>
                                                    <p>{!! $service->description !!}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>

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