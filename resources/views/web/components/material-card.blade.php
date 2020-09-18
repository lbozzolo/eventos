<div class="accordion-item opened material" style="min-height: 190px">
    <div class="accordion__item-header" data-toggle="collapse">

        <div class="material_title text-azul-oscuro">

            <a class="float-right ml-4" href="{!! route('material.download', $material) !!}" title="Descargar">
                <i class="fa fa-download text-dark-green"></i>
            </a>

            @if($material->mime == 'application-pdf')
                <a class="float-right" href="{!! route('material.pdf.ver', $material) !!}" target="_blank" title="ver">
                    <i class="fa fa-file-pdf-o text-celeste-oscuro"></i>
                </a>
            @endif

            <span>{!! $material->nombre !!}</span>

        </div>

    </div>
    <div>

        @if($material->area)
            <p class="badge badge-secondary">{!! $material->area !!}</p><br>
        @endif

        @if($material->author)
            <p>
                De {!! $material->author !!}
                @if($material->email)
                    <span class="text-dark ml-3"><i class="fa fa-envelope"></i> {!! $material->email !!}</span>
                @endif
            </p>
        @endif

        <small class="text-muted">palabras clave: </small>
        @foreach($material->tags as $tag)
            <span class="text-primary">{!! $tag->name !!}@if(!$loop->last), @else. @endif</span>
        @endforeach

    </div>
</div>