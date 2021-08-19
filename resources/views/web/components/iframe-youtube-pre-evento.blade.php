<div class="blog-item">
    <div class="blog__img container-video">

        @if($charla->videos->count())

            @if($charla->videos()->where('active', 1)->first())
                <div class="video-responsive">
                    <iframe
                            id="video_primary"
                            src="https://www.youtube.com/embed/{!! $charla->videos()->where('active', 1)->first()->video_id !!}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            class="video-responsive-item"
                            {{--class="iframe-video"--}}
                            allowfullscreen>
                    </iframe>
                </div>
            @endif

        @endif

    </div>
    <div class="mt-3">
        @if($charla->videos->count() > 1)
            @foreach($charla->videos as $iframe)
                @if($iframe->active != 0)
                    <span title="{!! $iframe->title !!}">
                        <img src="https://img.youtube.com/vi/{!! $iframe->video_id !!}/default.jpg"
                             class="video_secondary"
                             style="width: 100px"
                             data-url="https://www.youtube.com/embed/{!! $iframe->video_id !!}">
                    </span>
                @endif
            @endforeach
        @endif
    </div>

</div>