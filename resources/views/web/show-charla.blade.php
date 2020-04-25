@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    @include('vendor.flash.message')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="col-lg-12">
            @include('web.components.cerrar-sesion')
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2>
                        <span class="text-azul-claro">Evento</span>
                        - {!! $charla->nombre !!} / {!! $charla->cliente->nombre !!}
                    </h2>

                    <div class="float-right mb-3">
                        <a href="{!! route('web.charlas.inscripcion', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}" class="btn btn__primary btn__bordered module__btn-request mr-3">
                            <span>Inscribirse</span><i class="icon-arrow-right"></i>
                        </a>
                        <a href="{!! route('web.iniciar-sesion', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}" class="btn btn__primary btn__bordered module__btn-request mr-3">
                            <span>Ingresar</span><i class="icon-arrow-right"></i>
                        </a>
                    </div>

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

    {{--<section id="blogSingleCentered" class="blog blog-single pb-40 pt-5">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<div class="col-sm-12 col-md-12 col-lg-8">--}}
                    {{--<div class="blog-item">--}}
                        {{--<div class="blog__img">--}}
                            {{--<a href="#">--}}
                                {{--@if($charla->iframes->count())--}}
                                {{--<iframe width="760"--}}
                                        {{--height="415"--}}
                                        {{--id="iframe-primary"--}}
                                        {{--src="https://www.youtube.com/embed/{!! $charla->iframes->first()->video_id !!}"--}}
                                        {{--frameborder="0"--}}
                                        {{--allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
                                        {{--allowfullscreen>--}}
                                {{--</iframe>--}}
                                {{--@endif--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--@foreach($charla->iframes as $iframe)--}}
                                {{--<span title="{!! $iframe->title !!}">--}}
                                    {{--<img src="https://img.youtube.com/vi/{!! $iframe->video_id !!}/default.jpg"--}}
                                         {{--class="iframe-secondary"--}}
                                         {{--style="width: 100px"--}}
                                         {{--data-url="https://www.youtube.com/embed/{!! $iframe->video_id !!}">--}}
                                {{--</span>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

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