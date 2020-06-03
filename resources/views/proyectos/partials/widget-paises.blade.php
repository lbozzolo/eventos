<div class="card grid-margin">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-primary">Inscriptos por país</h4>

                @if($item->inscriptos->count())
                <canvas id="paises"></canvas>
                @else
                    <small><em class="text-gray">Todavía no hay inscriptos</em></small>
                @endif
            </div>
        </div>
    </div>
</div>