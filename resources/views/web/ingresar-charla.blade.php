@extends('web.layout-charla')

@section('content')


    @include('web.components.header-charla')


    <section class="blog blog-single pb-0 pt-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('vendor.flash.message')

                    <h4>
                        <span class="text-azul-claro">{!! $charla->categorias->first()->nombre !!}</span>
                        - {!! $charla->nombre !!}  ({!! $charla->cliente->nombre !!})
                    </h4>

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

    <section class="pt-5 pb-5 pl-5 bg-celeste-oscuro text-white">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">

                    @if($charla->publico)
                        <span class="text-azul-claro">Este evento es público.</span>
                    @else
                        <span class="text-black">Estás inscripto a este evento.</span>
                    @endif

                    @include('web.components.info-evento')

                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-0 bg-celeste-claro text-azul-oscuro">
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