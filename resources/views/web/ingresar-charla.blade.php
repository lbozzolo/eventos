@extends('web.layout-charla')

@section('content')


    @include('web.components.header-charla')


    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="col-lg-12">
            @include('web.components.cerrar-sesion')
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('vendor.flash.message')

                    <h2>
                        <span class="text-azul-claro">Evento</span>
                        - {!! $charla->nombre !!} / {!! $charla->cliente->nombre !!}
                    </h2>

                    @if($charla->publico)
                        <span class="text-dark-green">Este evento es público.</span>
                    @else
                        <span class="text-dark-green">Estás inscripto a este evento.</span>
                        {{--<a href="">Cancelar inscripción</a>--}}
                    @endif

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

    <section id="blogSingleCentered" class="blog blog-single pb-40 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">

                    @include('web.components.iframe-youtube')

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