<div class="card grid-margin bg-youtube text-white">
    <a href="{!! route($modelPlural.'.videos', $item->id) !!}" class="float-right text-white no-decoration">
        <div class="card-body">
            <h4 class="d-inline-block mr-3"><i class="mdi mdi-youtube-play mdi-18px" style="color: darkred; "></i> Videos</h4>
            <span class="float-right text-white lead">{!! $item->videos->count() !!}</span>
            <p class="text- mb-0 pb-0" style="color: darkred">Videos del evento finalizado</p>
        </div>
    </a>
</div>