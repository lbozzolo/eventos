<div class="card grid-margin bg-info text-white">
    <a href="{!! route($modelPlural.'.material.relacionado', $item->id) !!}" class="float-right text-white no-decoration">
        <div class="card-body">
            <h4 class="d-inline-block mr-3"><i class="mdi mdi-file-document mdi-18px" style="color: purple; "></i> Material relacionado</h4>
            <span class="float-right text-white lead">{!! $item->materiales->count() !!}</span>
            <p class="text- mb-0 pb-0" style="color: black">Archivos de material relacionado al evento</p>
        </div>
    </a>
</div>