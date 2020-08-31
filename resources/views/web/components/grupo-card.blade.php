<div class="blog-item">
    <div class="blog__img">
        <a href="{!! route('web.grupos.show', [
        'cliente' => $proyecto->proyectos->first()->cliente_slug,
        'evento' => $proyecto->nombre_slug,
        'id' => $proyecto->id]) !!}">
            <img src="{!! $proyecto->mainImage() !!}" alt="blog image">
        </a>
    </div>
    <div class="blog__content">
        <div class="blog__meta">
            <div class="blog__meta-cat">
                <a href="#">{!! $proyecto->categoria->nombre !!}</a>
            </div>
        </div>
        <h4 class="blog__title">
            <a href="{!! route('web.grupos.show', [
            'cliente' => $proyecto->proyectos->first()->cliente_slug,
            'evento' => $proyecto->nombre_slug,
            'id' => $proyecto->id]) !!}">
                {!! $proyecto->nombre !!}
            </a>
        </h4>
    </div>
</div>