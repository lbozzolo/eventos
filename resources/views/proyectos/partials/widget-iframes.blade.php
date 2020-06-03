<div class="card grid-margin bg-behance text-white">
    <a href="{!! route($modelPlural.'.iframes', $item->id) !!}" class="float-right text-white no-decoration">
        <div class="card-body">
            <h4 class="d-inline-block mr-3"><i class="mdi mdi-video mdi-18px" style="color: lightskyblue"></i> Iframes</h4>
            <span class="float-right text-white lead">{!! $item->iframes->count() !!}</span>
            <p class="text- mb-0 pb-0" style="color: midnightblue">Iframe del streaming del evento</p>
        </div>
    </a>
</div>