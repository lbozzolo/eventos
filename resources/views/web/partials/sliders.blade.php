<div id="minimal-bootstrap-carousel" class="carousel default-home-slider slide carousel-fade shop-slider" data-ride="carousel">

    <div class="carousel-inner" role="listbox">

        @if($slider->texts->count())

            @foreach($slider->texts as $key => $image)

                <div class="item {!! ($key == 0)? 'active' : '' !!} slide-{!! $key + 1 !!}" style="background-image: url({!! asset('imagenes/'.$image->path) !!}); backgroudn-position: center right;">

                    <div class="carousel-caption nhs-caption nhs-caption{!! $key + 5 !!}">
                        <div class="thm-container">
                            <div class="box valign-middle">
                                <div class="content text-center">
                                    <h2 data-animation="animated fadeInUp" class="this-title">{!! $image->pivot->main_text !!}</h2>
                                    <p data-animation="animated fadeInDown">{!! $image->pivot->secondary_text !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        @endif

    </div>

    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Siguiente</span>
    </a>
</div>