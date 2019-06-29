@extends('web.layout')


@section('content')

    <section class="row final-inner-header">
        <div class="container">
            <h2 class="this-title">Galería de imagenes</h2>
        </div>
    </section>

    <section class="container clearfix common-pad-inner about-info-box">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">

                <div class="sec-header">
                    <h2>Nuestra Galería</h2>
                    <h3>Aquí te mostramos un poco de nuestra Hostería.</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="clearfix news-wrapper">
        <div class="container clearfix common-pad gallery-page-one" id="gallery">

            <div class="row">

                <div class="image-gallery" data-filter-class="gallery-sorter">

                    @if(isset($gallery))
                        @foreach($gallery->imagesBig as $image)

                            <div class="single-gallery anim-5-all interoors kitchen balcony masonryImage mix span-4">
                                <div class="img-holder">
                                    <a href="" data-toggle="modal" data-target="#modalVerImage{!! $image->id !!}">
                                    <img src="{!! route('imagenes.ver', $image->path) !!}" alt="" height="350">
                                    </a>
                                </div>
                            </div>

                            <div class="modal fade" id="modalVerImage{!! $image->id !!}" style="z-index: 10000">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="{{ route('imagenes.ver', $image->path) }}" class="img-responsive" alt="{!! $image->title !!}" style="width: 100%; margin: 0px auto">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif

                </div>
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