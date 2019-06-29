@extends('web.layout')


@section('content')

    <section class="row final-inner-header">
        <div class="container">
            <h2 class="this-title">Habitación {!! (isset($habitacion))? ucfirst($habitacion->type) : $type !!}</h2>
        </div>
    </section>

    <section class="container clearfix common-pad-inner">
        <div class="row">
            <div class="col-md-4 col-md-push-8"></div>

            <div class="col-md-12">
                @if($habitacion)
                <div class="single-room-wrapper">

                    @if($habitacion->images->count())
                    <div class="room-slider-wrapper">
                        <div class="single-r-wrapper">
                            <div class="single-sl-room">
                                @foreach($habitacion->imagesBig as $image)
                                    <div class="owl-itemm" data-hash="zero">
                                        <img src="{{ route('imagenes.ver', $image->path) }}" alt="">
                                    </div>
                                @endforeach
                            </div>

                            @foreach($habitacion->imagesThumb->slice(1) as $image)
                                <a class="button secondary url" href="#zero">
                                    <img src="{{ route('imagenes.ver', $image->path) }}" alt="">
                                </a>
                            @endforeach

                        </div>
                    </div>
                    @else

                        <p class="text-secondary">Todavía no hay imágenes cargadas.</p>

                    @endif

                    <div class="room-dec-wrapper">
                        <h2>Descripción de la Habitación</h2>
                        <p class="text-secondary">{!! ($habitacion->description)? $habitacion->description : 'Todavía no hay ninguna descripción de esta habitación.' !!}</p>
                    </div>

                    <div class="room-fac-wrapper">
                        <h2>Servicios</h2>
                        <div class="row">
                            @if($habitacion->services->count())
                            <div class="ro-facilitie">
                                <ul class="clearfix">
                                    @foreach($habitacion->services as $service)
                                        <li>
                                            <div class="facilitie-i-box">
                                                <h3>{!! $service->name !!}</h3>
                                                <span>
                                                    @if($service->mainImageThumb())
                                                        <img src="{{ route('imagenes.ver', $service->mainImageThumb()->path) }}">
                                                    @else
                                                        <img src="{!! asset('images/noimage.png') !!}" style="width: 64px">
                                                    @endif
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @else

                                <p class="text-secondary">Todavía no hay servicios cargados.</p>

                            @endif
                        </div>
                    </div>

                </div>
                @else

                    <p class="text-secondary">Todavía no hay ninguna habitación {!! $type !!} cargada</p>

                @endif
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