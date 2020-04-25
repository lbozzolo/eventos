<div class="card grid-margin">

    <div class="card-body">

        <h3 class="d-inline-block mr-3">PDF's</h3>
        <a href="{!! route($modelPlural.'.pdfs', $item->id) !!}" class="btn btn-outline-success btn-sm float-right">agregar</a>

        <div class="card-body mt-3" style="background-color: #f2f8f9">
            <ul class="list-unstyled">
                @forelse($item->pdfs as $pdf)

                    <li>

                        <a href="{!! route('pdf.ver', $pdf->path) !!}" target="_blank">
                        <span class="text-primary">
                            <i class="mdi mdi-file-pdf-box mdi-18px"></i> {!! $pdf->title !!}
                        </span>
                        </a>
                    </li>

                @empty

                    <li class="text-muted"><i class="mdi mdi-vanish"></i> <small><em>No hay PDF's para mostrar.</em></small> </li>

                @endforelse
            </ul>
        </div>

    </div>

</div>