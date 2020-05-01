@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    @include('vendor.flash.message')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="float-right mb-3 text-center">
                        @if(!$charla->publico)
                        <a href="{!! route('web.charlas.inscripcion', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}"
                           class="btn btn__primary btn__bordered module__btn-request mr-3 mb-1">
                            <span>Inscribirse</span><i class="icon-arrow-right"></i>
                        </a>
                        @endif
                        <a href="{!! route('web.iniciar-sesion', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}"
                           class="btn btn__primary btn__bordered module__btn-request mr-3 mb-1">
                            <span>Ingresar</span><i class="icon-arrow-right"></i>
                        </a>
                    </div>

                    <h2 class="mb-0">
                        <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span>
                        - {!! $charla->nombre !!} / {!! $charla->cliente->nombre !!}
                    </h2>
                    <p class="lead text-black">{!! $charla->descripcion !!}</p>



                    @include('web.components.info-evento')

                </div>
            </div>
        </div>
    </section>

    <section class="blog blog-single pb-0 pt-5" style="border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('web.partials.auspiciantes')

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