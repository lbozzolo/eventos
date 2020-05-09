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
                        <h2 class="mb-0">{!! $charla->nombre !!} / {!! $charla->cliente->nombre !!}</h2>
                        <p class="lead text-black">{!! $charla->descripcion !!}</p>
                        <p class="lead text-danger">Este evento ha finalizado</p>

                    </div>

                    <div class="mt-3">
                        @forelse($charla->pdfs as $pdf)
                            <a href="{!! route('pdf.ver', $pdf->path) !!}" target="_blank" class="mr-3 mb-1 btn__bordered module__btn-request btn btn-outline-dark">Programa <i class="fa fa-file-text-o"></i> </a>
                        @empty
                        @endforelse

                        <a href="{!! route('web.iniciar-sesion', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}"
                           class="btn btn__primary btn__bordered module__btn-request mr-3 mb-1">
                            <span>Ingresar</span><i class="icon-arrow-right"></i>
                        </a>
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