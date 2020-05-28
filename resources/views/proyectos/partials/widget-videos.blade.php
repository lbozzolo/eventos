<div class="card grid-margin">

    <div class="card-body">

        <h3 class="d-inline-block mr-3">Videos</h3>
        <a href="{!! route($modelPlural.'.videos', $item->id) !!}" class="float-right"><i class="mdi mdi-plus-box-outline mdi-24px"></i></a>

        {{--<div class="card-body mt-3" style="background-color: #f2f8f9">--}}

            {{--<div class="row">--}}
                {{--@forelse($item->videos as $video)--}}

                    {{--<img src="https://img.youtube.com/vi/{!! $video->video_id !!}/default.jpg" style="width: 100px; margin: 5px"><br>--}}

                {{--@empty--}}

                    {{--<span class="text-muted"><i class="mdi mdi-vanish"></i> <small><em>No hay videos para mostrar.</em></small> </span>--}}

                {{--@endforelse--}}
            {{--</div>--}}

        {{--</div>--}}

    </div>

</div>