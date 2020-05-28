<div class="card grid-margin">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                @if($item->isFinished())
                    <span class="text-danger float-right">FINALIZADO</span>
                @endif
                <h4 class="text-primary">Asistentes durante el evento</h4>
                <canvas id="online_timeline">
                </canvas>
                <p class="text-center pt-3 mb-0 pb-0" style="border-top: 1px solid lightgray">{!! $item->fecha !!}</p>
            </div>
        </div>
    </div>
</div>