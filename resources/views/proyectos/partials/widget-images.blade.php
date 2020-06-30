<div class="card grid-margin bg-warning">
    <a href="{!! route($modelPlural.'.imagenes', $item->id) !!}" class="float-right text-white no-decoration">
        <div class="card-body">
            <h4 class="d-inline-block mr-3"><i class="mdi mdi-image mdi-18px" style="color: darkorange"></i> Imágenes</h4>
            <span class="float-right text-white lead">{!! $item->imagesBig->count() !!}</span>
            <p class="mb-0 pb-0 text-dark">Visible en grilla de eventos</p>
        </div>
    </a>
</div>