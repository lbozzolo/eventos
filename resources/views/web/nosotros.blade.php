@extends('web.layout')


@section('content')

<!-- Header  Inner style-->
<section class="row final-inner-header-nos">
    <div class="container">
        <h2 class="this-title">Nosotros</h2>
    </div>
</section>

<!-- Header  Slider style-->


<!-- About Resort style-->
<section class="container clearfix common-pad about-info-box">

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

            <div class="sec-header3">
                <h2>Un poco de nuestra Historia</h2>
            </div>
            <p>La Hostería Kallfu se encuentra ubicada en el centro de la Villa de alta montaña Caviahue, conocida por los bosques de Pehuenes, el lago Agrio, sus lagunas, sus cascadas  y la gran proximidad al volcán Copahue.</p>

            <p>Contamos con apart. triples, habitaciones dobles, triples, cuádruples y séxtuples, desayuno incluido que se sirve en el restaurante ubicado en el mismo complejo. Acceso a la pileta climatizada, al hidromasaje y al sector de saunas.</p>

            <h6>La atención por parte de sus dueños complementa las instalaciones con un servicio familiar y personalizado, demostrando un interés genuino en que cada visita se sienta consentida.</h6>

            <ul>
                <li><span>Naturaleza</span></li>
                <li><span>Tranquilidad</span></li>
                <li><span>Excelente Atención</span></li>
            </ul>

        </div>

        <div class="col-sm-4 hidden-xs">

            <div class="img-cap-effect">
                <div class="img-box">
                    <img src="{{ asset('template-web/images/about/1.jpg') }}" alt="">
                    <div class="img-caption">

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- About Resort style-->


<!-- Our Resort Values style-->
<section class="clearfix news-wrapper">
    <div class="container clearfix common-pad">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-xs-12 our-resort-value hidden-xs">
                <div class="img-l-box"><img src="{{ asset('template-web/images/our-resort-values/1.jpg') }}" alt=""></div>
                <div class="img-r-box"><div class="img-box1"><img src="{{ asset('template-web/images/our-resort-values/2.jpg') }}" alt=""></div><div class="img-box2"><img src="images/our-resort-values/3.jpg" alt=""></div></div>


            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">

                <div class="resort-r-value">
                    <div class="sec-header sec-header-pad">
                        <h2>Nuestros Valores</h2>
                        <br>
                    </div>
                    <div class="accordian-area">


                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" aria-expanded="false" aria-controls="collapseThree">
                                            <span>Innovación y calidad al servicio del cliente.</span><i class="fa fa-minus"></i><i class="fa fa-plus"></i>
                                        </a>
                                    </h4>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" aria-expanded="false" aria-controls="collapseThree">
                                            Compromiso social y medioambiental.<i class="fa fa-minus"></i><i class="fa fa-plus"></i>
                                        </a>
                                    </h4>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" aria-expanded="false" aria-controls="collapseThree">
                                            Nuestra dedicación al cliente.<i class="fa fa-minus"></i><i class="fa fa-plus"></i>
                                        </a>
                                    </h4>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


</section>
<!-- Our Resort Values style-->



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