<div class="card grid-margin bg-github text-white">
    <a href="{!! route($modelPlural.'.links', $item->id) !!}" class="float-right text-white no-decoration">
        <div class="card-body">
            <h4 class="d-inline-block mr-3"><i class="mdi mdi-link mdi-18px" style="color: lightgray"></i> Enlaces</h4>
            <span class="float-right text-white lead">{!! $item->links->count() !!}</span>
            <p class="text- mb-0 pb-0" style="color: lightgray">Enlaces de redireccionamiento externo</p>
        </div>
    </a>
</div>