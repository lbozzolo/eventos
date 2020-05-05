@if(!$charla->publico)
    <a href="{!! route('web.charlas.inscripcion', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}"
       class="btn btn__primary btn__bordered module__btn-request mr-3 mb-1">
        <span>Inscribirse</span><i class="icon-arrow-right"></i>
    </a>
@endif
<a href="{!! route('web.iniciar-sesion', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug, 'id' => $charla->id]) !!}"
   class="btn btn__primary btn__bordered module__btn-request mr-3 mb-1">
    <span>Ingresar</span><i class="icon-arrow-right"></i>
</a>