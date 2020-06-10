@extends('web.layout')

@section('content')

    @include('vendor.flash.message')

    @include('web.partials.sliders')

    <section class="bg-white" style="padding: 30px 0px 0px 0px">
        <div class="container">
            <div class="text__block">


                @foreach($charlas as $charla)
                <div class="row">
                    <div class="col-lg-5 card-body">
                        <div class="blog-item">
                            <div class="blog__img">
                                <a href="{!! route('web.charlas.show', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}">
                                    <img src="{!! $charla->mainImage() !!}" alt="blog image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="blog__content" style="padding-top: 20px">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">
                                    <span class="text__block-title text-dark-green" style="font-size: 1.5em">
                                        <i class="fa fa-calendar"></i> Evento del día
                                    </span>
                                </div>
                            </div>
                            <h2 class="blog__title" style="margin-bottom: 0px">
                                <a href="{!! route('web.charlas.show', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}">
                                    {!! $charla->nombre !!}
                                </a>
                                @if($charla->isFinished())
                                    <p class="blog__meta-date text-dark-green" style="font-size: 0.7em">Evento Finalizado</p>
                                @endif
                            </h2>
                            <div class="blog__meta-cat">
                                @foreach($charla->categorias as $categoria)
                                    <a href="#">{!! $categoria->nombre !!}</a>
                                @endforeach
                            </div>
                            <h5>{!! $charla->descripcion !!}</h5>
                            <span class="text-secondary" style="font-size: 1.5em">{!! $charla->fecha !!} · {!! $charla->hora !!} hs</span>

                            <div class="card-body">
                                @include('web.components.botones-ingreso')
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="blog blog-grid bg-celeste-claro">
        <div class="container">
            <div class="text__block">
                <h2 class="text__block-title text-white">¿Estás pensando en realizar un evento? </h2>
                <p class="lead text-azul-oscuro">Desde nuestra plataforma Eventum podemos realizar streaming en vivo de reuniones, seminarios y congresos, ya sea desde computadoras personales o equipos profesionales.
                    <br>
                    Eventum es la plataforma de streaming que lleva reuniones, seminarios y congresos a tu pantalla.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">

            <div class="row" style="margin-bottom: 50px">
                <div class="col-lg-12">
                    <h2 class="text-azul-oscuro">¡Las posibilidades son infinitas! </h2>
                    <p class="lead text-black">
                        Puede ser grabado o en vivo, con invitados o abierto a todo aquel que quiera registrarse. <br>
                        Permite interacción e intercambio, y te ofrece todo el material una vez finalizado tu evento.
                    </p>
                </div>
            </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-home">
                            <div class="card-body">
                                <h4 class="card-title">Seguridad <i class="fa fa-check text-dark-green"></i></h4>
                                <p class="lead">Tenemos las mejores herramientas para que tu streaming en Eventum sea seguro y privado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-home">
                            <div class="card-body">
                                <h4 class="card-title">On Line <i class="fa fa-check text-dark-green"></i></h4>
                                <p class="lead">Los participantes no tienen que descargarse ningún tipo de aplicación para acceder a los eventos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-home">
                            <div class="card-body">
                                <h4 class="card-title">Nadie se lo pierde <i class="fa fa-check text-dark-green"></i></h4>
                                <p class="lead">
                                    La audiencia puede ver tu evento en vivo o acceder al material grabado y editado que quedará disponible
                                    después de la transmisión.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-home">
                            <div class="card-body">
                                <h4 class="card-title">Moderación y dirección <i class="fa fa-check text-dark-green"></i></h4>
                                <p class="lead">
                                    Tenés la posibilidad de elegir a una persona que modere y dirija el evento y sea el nexo para
                                    aquellos miembros del público que quieran interactuar con los oradores.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="col-lg-6">
                        <div class="card-home">
                            <div class="card-body">
                                <h4 class="card-title">Interacción <i class="fa fa-check text-dark-green"></i></h4>
                                <p class="lead">
                                    Todos los participantes pueden hacer sus preguntas, que quedan registradas y pueden ser
                                    respondidas en vivo o post-streaming.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-home">
                            <div class="card-body">
                                <h4 class="card-title">Sin límites de espectadores en vivo <i class="fa fa-check text-dark-green"></i></h4>
                                <p class="lead">
                                    No ponemos limites de usuarios, ingresan tantos como deseen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-home">
                            <div class="card-body">
                                <h4 class="card-title">Estadísticas <i class="fa fa-check text-dark-green"></i></h4>
                                <p class="lead">
                                    En el reporte post-streaming vas a tener información concreta sobre tu audiencia: cuántos
                                    usuarios accedieron a la transmisión en vivo o grabada, de qué ciudad son, y cuáles son sus datos de contacto.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-home">
                            <div class="card-body">
                                <h4 class="card-title">Multidispositivo <i class="fa fa-check text-dark-green"></i></h4>
                                <p class="lead">
                                    Llevamos tu evento a celulares, tablets, computadoras y Smart TV.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>

    <section  id="quienes-somos"></section>

    <section class="blog blog-grid bg-dark-green">
        <div class="container">
            <div class="text__block">
                <h2 class="text__block-title text-white">¿Quiénes somos?</h2>
                <p class="text-azul-oscuro lead">
                    Un grupo de profesionales especializados en producción de imagen y sonido, streaming, generación de contenidos, comunicación,
                    manejo de redes sociales y organización de eventos, con un profundo conocimiento del sector agropecuario.
                </p>
                <p class="text-azul-oscuro lead" style="font-weight: 500">
                    ¡No dudes en contactarnos! Somos Eventum. Convertimos tu necesidad en realidad.
                </p>
            </div>
        </div>
    </section>

    {{--<section id="blogGrid" class="blog blog-grid pb-70">--}}
        {{--<div class="container">--}}

            {{--<h2 class="text__block-title">Eventos recientes</h2>--}}
            {{--<div class="row">--}}

            {{--@foreach($proyectos as $proyecto)--}}

                {{--<div class="col-sm-12 col-md-6 col-lg-4">--}}
                    {{--@include('web.components.proyecto-card')--}}
                {{--</div>--}}

            {{--@endforeach--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection