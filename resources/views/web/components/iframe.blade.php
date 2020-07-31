<div class="text-center">

        @if($charla->iframes->count() == 1)

            @if($charla->iframes->first()->type == 1)

            {{--
                    Si el iframe es de youtube
                    ==========================
            --}}

                <iframe
                        id="video_primary"
                        src="https://www.youtube.com/embed/{!! $charla->iframes->first()->video_id !!}"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        class="iframe"
                        allowfullscreen>
                </iframe>

            @else

            {{--
                    Si el iframe es de STWEB
                    ==========================
            --}}
                <iframe
                        width="100%"
                        src="{!! $charla->iframes->first()->path !!}"
                        frameborder="0"
                        allowfullscreen
                        class="iframe">
                </iframe>

            @endif

        @endif

        @if($charla->iframes->count() > 1)

            <div class="bd-example bd-example-tabs">
                <div class="tab-content" id="pills-tabContent">
                    @foreach($charla->iframes as $iframe)
                    <div class="tab-pane fade @if ($loop->first) active @endif show" id="iframe{!! $iframe->id !!}" role="tabpanel" aria-labelledby="pills-home-tab">

                        @if($iframe->type == 1)

                            {{--
                                    Si el iframe es de youtube
                                    ==========================
                            --}}

                            <iframe
                                    src="https://www.youtube.com/embed/{!! $iframe->video_id !!}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    class="iframe"
                                    allowfullscreen>
                            </iframe>


                        @else

                            {{--
                                    Si el iframe es de STWEB
                                    ==========================
                            --}}

                            <iframe width="100%" src="{!! $iframe->path !!}" frameborder="0" allowfullscreen class="iframe"></iframe>

                        @endif

                        {{--<iframe width="100%" src="{!! $iframe->path !!}" frameborder="0" allowfullscreen class="iframe"></iframe>--}}

                    </div>
                    @endforeach
                </div>
            </div>

        @endif

</div>