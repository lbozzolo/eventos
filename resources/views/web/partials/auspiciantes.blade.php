<section id="clients" class="clients pr-5 pl-5 pt-0 pb-5">
    <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
         data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">

        @foreach($charla->auspiciantesShuffle() as $auspiciante)
            <div class="client">
                <a href="{!! ($auspiciante->url)? $auspiciante->url : '#' !!}" title="{!! ($auspiciante->url)? $auspiciante->nombre : '' !!}" target="_blank">
                    <img src="{!! $auspiciante->mainImage() !!}" alt="client">
                </a>
            </div>
        @endforeach

    </div>
</section>