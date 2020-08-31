@extends('web.layout-charla')

@section('content')

    <img src="{!! $charla->proyectos->first()->header->mainImage() !!}" width="100%"/>

    @include('vendor.flash.message')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pl-3">

                        <span class="text-azul-claro lead">{!! $charla->categoria->nombre !!}</span>
                        <h2 class="mb-0">{!! $charla->nombre !!} / {!! ($charla->proyectos->first()->cliente)? $charla->proyectos->first()->cliente->nombre : '' !!}</h2>
                        @if($charla->descripcion)
                        <p class="lead text-black">{!! $charla->descripcion !!}</p>
                        @endif

                    </div>
                    <div class="mt-3 mb-3">

                        <a href="{!! route('web.grupos.inscripcion', ['cliente' => $charla->proyectos->first()->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}"
                           class="btn btn__primary btn__bordered module__btn-request mr-3 mb-1">
                            <span>Inscribirse</span><i class="icon-arrow-right"></i>
                        </a>

                    </div>
                    <div class="row">

                        @foreach($charla->proyectos as $proyecto)
                            <div class="col-sm-12 col-md-4 col-lg-3">
                                <div class="blog-item">
                                    <a href="{!! route('web.iniciar-sesion', ['cliente' => $proyecto->cliente_slug, 'evento' => $proyecto->nombre_slug, 'id' => $proyecto->id]) !!}">

                                        <div class="blog__img">
                                            <img src="{!! $proyecto->mainImage() !!}" alt="blog image">
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <span class="blog__meta-date" style="color: gray">{!! $proyecto->fecha_formatted !!} hs</span>
                                                <div class="blog__meta-cat">
                                                    @foreach($proyecto->categorias as $categoria)
                                                        <span>{!! $categoria->nombre !!}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <h4 class="blog__title pl-3">
                                                <span>{!! $proyecto->nombre !!}</span><br>
                                                <small style="font-family: Roboto; font-size: 0.5em">{!! $proyecto->descripcion !!}</small>
                                                @if($proyecto->isFinished())
                                                    <p class="blog__meta-date text-dark-green" style="font-size: 0.7em">Evento Finalizado</p>
                                                @endif
                                            </h4>

                                            <a href="{!! route('web.iniciar-sesion', ['cliente' => $proyecto->cliente_slug, 'evento' => $proyecto->nombre_slug, 'id' => $proyecto->id]) !!}"
                                               class="btn btn__primary btn__bordered module__btn-request mr-3 mb-1">
                                                <span>Ingresar</span>
                                            </a>
                                        </div>

                                    </a>

                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-3">

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="blog blog-single pb-0 pt-5" style="border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <section id="clients" class="clients pr-5 pl-5 pt-0 pb-5">
                        <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
                             data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">

                            @foreach($charla->proyectos->first()->auspiciantesShuffle() as $auspiciante)
                                <div class="client">
                                    <a href="{!! ($auspiciante->url)? $auspiciante->url : '#' !!}" title="{!! ($auspiciante->url)? $auspiciante->nombre : '' !!}" target="_blank">
                                        <img src="{!! $auspiciante->mainImage() !!}" alt="client">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-0 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    @include('web.components.cerrar-sesion')
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')

    <script>

        $('.iframe-secondary').click(function () {

            let src = $(this).attr('data-url');

            console.log($(this).attr('src'));
            $('#iframe-primary').attr('src', src);

        });

    </script>

@endsection