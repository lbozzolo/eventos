<div class="card grid-margin">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                @if($item->isFinished())
                    <span class="text-danger float-right">FINALIZADO</span>
                @endif
                <h4 class="text-primary">Asistentes durante el evento</h4>

                @if($item->inscriptos->count())

                    @if($item->hasBegun())
                        <canvas id="online_timeline"></canvas>
                        <p class="text-center pt-3 mb-0 pb-0" style="border-top: 1px solid lightgray">
                            {!! $item->fecha !!}<br>
                            <small class="text-center text-gray">Actualizado cada 5 minutos</small>
                        </p>

                    @else
                        <small><em class="text-gray">El registro de asistentes comenzará a relevarse una vez iniciado el evento.</em> </small>
                    @endif

                @else

                    <small><em class="text-gray">Todavía no hay inscriptos.</em> </small>

                @endif
            </div>
        </div>
    </div>
</div>