<div class="card grid-margin bg-dark text-white">
    <a href="{!! route($modelPlural.'.pdfs', $item->id) !!}" class="float-right text-white no-decoration">
        <div class="card-body">
            <h4 class="d-inline-block mr-3"><i class="mdi mdi-file-pdf mdi-18px text-gray"></i> PDF's</h4>
            <span class="float-right text-white lead">{!! $item->pdfs->count() !!}</span>
            <p class="text-gray mb-0 pb-0">PDF con el programa del evento</p>
        </div>
    </a>
</div>