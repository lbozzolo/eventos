





<div class="row">

    <div class="col-lg-6 mb-4">
        <a href="{!! route('proyectos.inscripciones', $item->id) !!}" class="btn btn-outline-dark" style="width: 100%">
            <h3 class="mb-0 font-weight-semibold">{!! $item->inscriptos->count() !!}</h3>
            <h5 class="mb-2 font-weight-medium text-gray">
                {!! ($item->inscriptos->count() == 1)? 'Inscripto' : 'Inscriptos' !!}
            </h5>
        </a>
        <a href="{!! route('proyectos.export.inscriptos', $item->id) !!}" class="btn btn-warning mt-1" style="display: block">
            exportar</a>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="wrapper">
            <a href="{!! route($modelPlural.'.consultas', $item->id) !!}" class="btn btn-outline-dark" style="width: 100%">
                <h3 class="mb-0 font-weight-semibold">{!! $item->consultas->count() !!}</h3>
                <h5 class="mb-2 font-weight-medium text-gray">
                    {!! ($item->consultas->count() == 1)? 'Consulta' : 'Consultas' !!}
                </h5>
            </a>
            <a href="{!! route('proyectos.export.consultas', $item->id) !!}" class="btn btn-primary mt-1" style="display: block">
                exportar</a>
        </div>
    </div>

</div>