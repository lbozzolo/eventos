<div class="card grid-margin">

    <div class="card-body">

        <h3 class="d-inline-block mr-3">Imágenes</h3>
        <a href="{!! route($modelPlural.'.imagenes', $item->id) !!}" class="btn btn-outline-success btn-sm float-right">Agregar</a>

        <div class="card-body mt-3" style="background-color: #f2f8f9">
            @forelse($item->imagesThumb as $image)

                <span style="display: inline-block">
                    <a href="" data-toggle="modal" data-target="#modalVerImage{!! $image->id !!}">
                        <img src="{{ route('imagenes.ver', $image->path) }}" alt="{!! $image->title !!}" class="img-responsive" style="{!! ($image->main == 0)? 'opacity: 0.5;' : '' !!} height: 80px">
                    </a>
                </span>

            @empty

                <span class="text-muted"><i class="mdi mdi-vanish"></i> <small><em>No hay imágenes para mostrar.</em></small> </span>

            @endforelse
        </div>

        @foreach($item->imagesBig as $image)

            <div class="modal fade" id="modalVerImage{!! $image->thumbnail_id !!}">
                <div class="modal-dialog">
                    <div class="modal-content" style="min-height: 200px">
                        <div class="modal-body">
                            <img src="{{ route('imagenes.ver', $image->path) }}" class="img-responsive" alt="{!! $image->title !!}" style="width: 100%; margin: 0px auto">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                                <i class="mdi mdi-close"></i> Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

</div>