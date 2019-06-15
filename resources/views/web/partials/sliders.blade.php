<div class="slider home-slider clearfix" data-auto-play="8000">

    @foreach($slider->imagesBig as $image)

        <div class="slide img-bg clearfix" data-background="{{ asset('imagenes/' . $image->path ) }}">
            <div class="slider-mask"></div>
            <div class="caption-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h3>{!! $slider->name !!}</h3>
                            <p>{!! $slider->text !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

</div>