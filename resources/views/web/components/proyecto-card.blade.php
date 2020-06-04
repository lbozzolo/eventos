<div class="blog-item">
    <div class="blog__img">
        <a href="{!! route('web.charlas.show', ['cliente' => $proyecto->cliente_slug, 'evento' => $proyecto->nombre_slug, 'id' => $proyecto->id]) !!}">
            <img src="{!! $proyecto->mainImage() !!}" alt="blog image">
        </a>
    </div>
    <div class="blog__content">
        <div class="blog__meta">
            <span class="blog__meta-date">{!! $proyecto->fecha_formatted !!} hs</span>
            <div class="blog__meta-cat">
            @foreach($proyecto->categorias as $categoria)
                <a href="#">{!! $categoria->nombre !!}</a>
            @endforeach
             </div>
        </div>
        <h4 class="blog__title">
            <a href="{!! route('web.charlas.show', ['cliente' => $proyecto->cliente_slug, 'evento' => $proyecto->nombre_slug, 'id' => $proyecto->id]) !!}">
                {!! $proyecto->nombre !!}
            </a>
            @if($proyecto->isFinished())
                <p class="blog__meta-date text-dark-green" style="font-size: 0.7em">Evento Finalizado</p>
            @endif
        </h4>
    </div>
</div>