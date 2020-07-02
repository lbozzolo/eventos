<div class="text-center">

        @if($charla->iframes->count() == 1)

            <iframe
                    width="100%"
                    {{--height="650"--}}
                    src="{!! $charla->iframes->first()->path !!}"
                    frameborder="0"
                    allowfullscreen
                    class="iframe"
            ></iframe>

        @endif

        @if($charla->iframes->count() > 1)

            <div class="bd-example bd-example-tabs">
                <div class="tab-content" id="pills-tabContent">
                    @foreach($charla->iframes as $iframe)
                    <div class="tab-pane fade @if ($loop->first) active @endif show" id="iframe{!! $iframe->id !!}" role="tabpanel" aria-labelledby="pills-home-tab">

                        <iframe width="100%" src="{!! $iframe->path !!}" frameborder="0" allowfullscreen class="iframe"></iframe>

                    </div>
                    @endforeach
                </div>
            </div>

        @endif

</div>

{{--<iframe--}}
{{--width="1280"--}}
{{--height="720"--}}
{{--src="{!! $charla->iframes->first()->path !!}"--}}
{{--frameborder="0"--}}
{{--allowfullscreen--}}
{{--></iframe>--}}

{{--<iframe width="760"--}}
{{--height="415"--}}
{{--id="iframe-primary"--}}
{{--src="https://www.youtube.com/embed/{!! $charla->iframes->first()->video_id !!}"--}}
{{--frameborder="0"--}}
{{--allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
{{--allowfullscreen>--}}
{{--</iframe>--}}

{{--<div>--}}
{{--@if($charla->iframes->count() > 1)--}}
{{--@foreach($charla->iframes as $iframe)--}}
{{--<span title="{!! $iframe->title !!}">--}}
{{--<img src="https://img.youtube.com/vi/{!! $iframe->video_id !!}/default.jpg"--}}
{{--class="iframe-secondary"--}}
{{--style="width: 100px"--}}
{{--data-url="https://www.youtube.com/embed/{!! $iframe->video_id !!}">--}}
{{--</span>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--</div>--}}