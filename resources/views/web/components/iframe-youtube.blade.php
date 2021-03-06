<div class="blog-item">
    <div class="blog__img container-video">

            @if($charla->videos->count())
                <iframe
                        id="video_primary"
                        src="https://www.youtube.com/embed/{!! $charla->videos->first()->video_id !!}"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        class="iframe-video"
                        allowfullscreen>
                </iframe>
            @endif

    </div>
    <div class="mt-3">
        @if($charla->videos->count() > 1)

            {{--Se listan primero los videos que fueron cargados como visibles antes del evento--}}
            @foreach($charla->videos()->where('active', 1)->get() as $iframe)
                <span title="{!! $iframe->title !!}">
                    <img src="https://img.youtube.com/vi/{!! $iframe->video_id !!}/default.jpg"
                         class="video_secondary"
                         style="width: 100px"
                         data-url="https://www.youtube.com/embed/{!! $iframe->video_id !!}">
                </span>
            @endforeach

            {{--Luego se carga el resto de los videos--}}
            @foreach($charla->videos()->where('active', 0)->get() as $iframe)
                <span title="{!! $iframe->title !!}">
                    <img src="https://img.youtube.com/vi/{!! $iframe->video_id !!}/default.jpg"
                         class="video_secondary"
                         style="width: 100px"
                         data-url="https://www.youtube.com/embed/{!! $iframe->video_id !!}">
                </span>
            @endforeach
        @endif
    </div>

</div>