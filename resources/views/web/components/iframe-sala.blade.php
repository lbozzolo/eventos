<div class="text-center">
    <div class="bd-example bd-example-tabs">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="pills-home-tab">

                @if($sala->type == 1)

                    {{--
                            Si el iframe es de youtube
                            ==========================
                    --}}

                    <div class="video-responsive">
                        <iframe
                                src="https://www.youtube.com/embed/{!! $sala->video_id !!}"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                class="video-responsive-item"
                                allowfullscreen>
                        </iframe>
                    </div>

                @else

                    {{--
                            Si el iframe es de STWEB
                            ==========================
                    --}}
                    <div class="video-responsive">
                        <iframe width="100%" src="{!! $sala->path !!}" frameborder="0" allowfullscreen class="video-responsive-item"></iframe>
                    </div>

                @endif

            </div>
        </div>
    </div>
</div>