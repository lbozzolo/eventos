@extends('web.layout-charla')

@section('content')

    @include('web.components.header-charla')

    @include('vendor.flash.message')

    <section class="blog blog-single pb-5 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pl-3">

                        <span class="text-azul-claro lead">{!! $charla->categorias->first()->nombre !!}</span>
                        <h2 class="mb-0">{!! $charla->nombre !!} / {!! ($charla->cliente)? $charla->cliente->nombre : '' !!}</h2>
                        <p class="lead text-black">{!! $charla->descripcion !!}</p>

                    </div>
                    <div class="pl-3 bg-dark-green">
                        @include('web.components.info-evento')
                    </div>

                    <div class="mt-3">
                    @forelse($charla->pdfs as $pdf)
                        <a href="{!! route('pdf.ver', $pdf->path) !!}" target="_blank" class="mr-3 mb-1 btn__bordered module__btn-request btn btn-outline-dark">Programa <i class="fa fa-file-text-o"></i> </a>
                    @empty
                    @endforelse

                        @include('web.components.botones-ingreso')
                    </div>

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