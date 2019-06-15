<div class="card">
    <div class="card-header">
        <h3>Imágenes</h3>
    </div>
    <div class="card-body" style="background-color: #f2f8f9">
        @forelse($item->imagesThumb as $imagen)

            <span style="display: inline-block">
                <a href="" data-toggle="modal" data-target="#modalVerImage{!! $imagen->id !!}">
                    <img src="{{ route('imagenes.ver', $imagen->path) }}" alt="{!! $imagen->title !!}" class="img-responsive" style="{!! ($imagen->main == 0)? 'opacity: 0.5;' : '' !!} height: 80px">
                </a>
            </span>

        @empty

            <span class="text-muted"><i class="mdi mdi-vanish"></i> <small><em>No hay imágenes para mostrar.</em></small> </span>

        @endforelse
    </div>
</div>

@foreach($item->imagesBig as $imagen)

    <div class="modal fade" id="modalVerImage{!! $imagen->thumbnail_id !!}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ route('imagenes.ver', $imagen->path) }}" class="img-responsive" alt="{!! $imagen->title !!}" style="width: 100%; margin: 0px auto">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

@endforeach


