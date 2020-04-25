<div class="blog-item">
    <div class="blog__img">
        <a href="{!! route('web.charlas.show', ['cliente' => $proyecto->cliente_slug, 'evento' => $proyecto->nombre_slug, 'id' => $proyecto->id]) !!}">
            <img src="{!! $proyecto->mainImage() !!}" alt="blog image">
        </a>
    </div>
    <div class="blog__content">
        <div class="blog__meta">
            <span class="blog__meta-date">{!! $proyecto->fecha_creado !!}</span>
            <div class="blog__meta-cat">
                @foreach($proyecto->categorias as $categoria)
                    <a href="#">{!! $categoria->nombre !!}</a>
                @endforeach
            </div>
        </div>
        <h4 class="blog__title"><a href="{!! route('web.charlas.show', ['cliente' => $proyecto->cliente_slug, 'evento' => $proyecto->nombre_slug, 'id' => $proyecto->id]) !!}">{!! $proyecto->nombre !!}</a></h4>
        {{--<a href="{!! route('web.charlas.show', ['cliente' => $proyecto->cliente_slug, 'evento' => $proyecto->nombre_slug, 'id' => $proyecto->id]) !!}" class="btn btn__secondary btn__link">--}}
            {{--<span>Ingresar</span>--}}
            {{--<i class="icon-arrow-right"></i>--}}
        {{--</a>--}}
    </div>
</div>