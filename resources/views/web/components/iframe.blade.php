<div class="text-center">

        @if($charla->iframes->count() == 1)

            @if($charla->iframes->first()->type == 1)

            {{--
                    Si el iframe es de youtube
                    ==========================
            --}}

            <div class="video-responsive">
                <iframe
                        id="video_primary"
                        src="https://www.youtube.com/embed/{!! $charla->iframes->first()->video_id !!}"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        class="video-responsive-item"
                        allowfullscreen>
                </iframe>
            </div>

            @elseif($charla->iframes->first()->type == 2)

                <div class="video-responsive">
                    <iframe class="video-responsive-item" src="{!! $charla->iframes->first()->video->path !!}" frameborder="0" title="" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
                {{--<div class="video-responsive">--}}
                    {{--<iframe class="video-responsive-item" src="https://player.vimeo.com/video/{!! $charla->iframes->first()->video->path !!}" frameborder="0" title="" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>--}}
                {{--</div>--}}

            @else

            {{--
                    Si el iframe es de STWEB
                    ==========================
            --}}
                <div class="video-responsive">
                    <iframe
                            width="100%"
                            src="{!! $charla->iframes->first()->path !!}"
                            frameborder="0"
                            allowfullscreen
                            class="video-responsive-item">
                    </iframe>
                </div>

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

                            <div class="video-responsive">
                                <iframe
                                        src="https://www.youtube.com/embed/{!! $iframe->video_id !!}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        class="video-responsive-item"
                                        {{--class="iframe"--}}
                                        allowfullscreen>
                                </iframe>
                            </div>


                        @elseif($iframe->type == 2)

                            <div class="video-responsive">
                                <iframe class="video-responsive-item" src="https://player.vimeo.com/video/{!! $iframe->path !!}" frameborder="0" title="" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </div>

                        @else

                            {{--
                                    Si el iframe es de STWEB
                                    ==========================
                            --}}

                            <div class="video-responsive">
                                <iframe width="100%" src="{!! $iframe->path !!}" frameborder="0" allowfullscreen class="video-responsive-item"></iframe>
                            </div>

                        @endif

                        {{--<iframe width="100%" src="{!! $iframe->path !!}" frameborder="0" allowfullscreen class="iframe"></iframe>--}}

                    </div>
                    @endforeach
                </div>
            </div>

        @endif

</div>