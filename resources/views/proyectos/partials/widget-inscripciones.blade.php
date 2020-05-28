<div class="card grid-margin">
    <div class="card-body">

        <div class="row">
            <div class="col-8">
                <a href="{!! route('proyectos.inscripciones', $item->id) !!}">
                    <div class="d-flex align-items-center mb-2">
                        <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                            <i class="mdi mdi-account mdi-24px text-white"></i>
                        </div>
                        <h3 class="font-weight-semibold mb-0 text-black">
                            {!! ($item->inscriptos->count() == 1)? $item->inscriptos->count().' inscripto' : $item->inscriptos->count().' inscriptos' !!}
                        </h3>

                    </div>
                </a>
                <div class="d-flex align-items-center mb-2">
                    <div class="icon-holder bg-success text-white py-1 px-3 rounded mr-2">
                        <i class="mdi mdi-account mdi-24px"></i>
                    </div>
                    <h3 class="font-weight-semibold mb-0" id="conectadosDiv">
                        {!! ($item->connected() == 1)? $item->connected().' conectado' : $item->connected().' conectados' !!}
                    </h3>
                </div>
                <p>Tiempo real</p>
                {{--<p><span class="font-weight-medium">0.51%</span> (30 days)</p>--}}
            </div>
            <div class="col-lg-4">
                <canvas id="conectados"
                        data-total="{!! $item->inscriptos->count() !!}"
                        data-connected="{!! $item->connected() !!}"
                        data-percentage="{!! $item->connectedPercentage() !!}">
                </canvas>
                <p class="text-center">Conectados</p>
            </div>
        </div>

    </div>
</div>
