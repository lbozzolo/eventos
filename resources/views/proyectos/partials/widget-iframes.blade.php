<div class="card grid-margin">

    <div class="card-body">

        <h3 class="d-inline-block mr-3">Iframes</h3>
        <a href="{!! route($modelPlural.'.iframes', $item->id) !!}" class="btn btn-outline-success btn-sm float-right">Agregar</a>

        <div class="card-body mt-3" style="background-color: #f2f8f9">

            <div class="row">
                @forelse($item->iframes as $video)

                    <iframe src="{!! $video->path !!}" style="height: 200px; margin: 5px"></iframe>
                    {{--<img src="https://img.youtube.com/vi/{!! $video->video_id !!}/default.jpg" style="width: 100px; margin: 5px"><br>--}}

                @empty

                    <span class="text-muted"><i class="mdi mdi-vanish"></i> <small><em>No hay iframes para mostrar.</em></small> </span>

                @endforelse
            </div>

        </div>

    </div>

</div>