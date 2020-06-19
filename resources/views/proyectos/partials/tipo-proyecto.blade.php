<div class="card card-body" >
    <div class="wrapper">
        @if($item->tipoProyecto() == 'Público')
            <h4 class="mb-0 font-weight-semibold"><i class="mdi mdi-24px mdi-folder-lock-open text-success" title="Público"></i> Público</h4>
            <h5 class="mb-0 font-weight-medium text-primary">Tipo de proyecto</h5>
            <p class="mb-0 text-gray">Evento gratuito. Ingreso libre</p>
        @elseif($item->tipoProyecto() == 'Pago')
            <h4 class="mb-1 font-weight-semibold"><i class="mdi mdi-24px mdi-currency-usd text-white bg-reddit" title="Público"></i> Pago</h4>
            <h5 class="mb-1 font-weight-medium text-primary">Tipo de proyecto</h5>
            <p class="mb-1 text-gray">Evento pago. Inscripción requerida</p>

            @include('proyectos.partials.codigos-acceso')

        @else
            <h4 class="mb-0 font-weight-semibold"><i class="mdi mdi-24px mdi-folder-lock text-danger" title="Privado"></i> Privado</h4>
            <h5 class="mb-0 font-weight-medium text-primary">Tipo de proyecto</h5>
            <p class="mb-0 text-muted">Evento gratuito. Inscripción requerida</p>
        @endif
    </div>
</div>