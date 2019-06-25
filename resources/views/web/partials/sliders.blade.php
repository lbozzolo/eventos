<div id="minimal-bootstrap-carousel" class="carousel default-home-slider slide carousel-fade shop-slider" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url({{ asset('template-web/images/slider/10.jpg') }});backgroudn-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption6">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title">Pasa tus vacaciones de ensueño</h2>
                            <p data-animation="animated fadeInDown">Espacios pensandos para que alcance el mayor confort en sus vacaciones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  slide-2" style="background-image: url({{ asset('template-web/images/slider/11.jpg') }});backgroudn-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption7">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-left pull-left">
                            <h2 data-animation="animated fadeInUp" class="this-title"><font color="#000000">El mejor lugar para relajarse</font></h2>
                            <p data-animation="animated fadeInDown">Lo invitarán a disfrutar el encanto de la vista única a este increíble espejo de agua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  slide-2" style="background-image: url({{ asset('template-web/images/slider/12.jpg') }});backgroudn-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption8">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title">Te ofrecemos lo mejor.</h2>
                            <h2 data-animation="animated fadeInUp" class="this-title">Actividades y excursiones para disfrutar en familia.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

{{--<div class="slider home-slider clearfix" data-auto-play="8000">--}}

    {{--@foreach($slider->imagesBig as $image)--}}

        {{--<div class="slide img-bg clearfix" data-background="{{ asset('imagenes/' . $image->path ) }}">--}}
            {{--<div class="slider-mask"></div>--}}
            {{--<div class="caption-box">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-8 col-md-offset-2">--}}
                            {{--<h3>{!! $slider->name !!}</h3>--}}
                            {{--<p>{!! $slider->text !!}</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--@endforeach--}}

{{--</div>--}}