<div class="blog-item">
    <div class="blog__img">

            @if($charla->iframes->count())
                <iframe width="760"
                        height="415"
                        id="iframe-primary"
                        src="https://www.youtube.com/embed/{!! $charla->iframes->first()->video_id !!}"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            @endif

    </div>
    <div>
        @if($charla->iframes->count() > 1)
            @foreach($charla->iframes as $iframe)
                <span title="{!! $iframe->title !!}">
                        <img src="https://img.youtube.com/vi/{!! $iframe->video_id !!}/default.jpg"
                             class="iframe-secondary"
                             style="width: 100px"
                             data-url="https://www.youtube.com/embed/{!! $iframe->video_id !!}">
                    </span>
            @endforeach
        @endif
    </div>

</div>