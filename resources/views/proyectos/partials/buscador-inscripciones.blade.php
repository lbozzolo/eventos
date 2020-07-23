
{!! Form::open(['url' => route('proyectos.inscripciones.buscar.usuario', $proyecto->id), 'method' => 'post', 'class' => 'form']) !!}
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::text('search', null, ['class' => 'form- mr-sm-2', 'autocomplete' => 'off', 'style' => 'border: 1px solid lightgray']) !!}

            {!! Form::submit('Buscar', ['class' => 'btn btn-outline-primary btn-sm']) !!}
            @role('Superadmin|Admin')
            <a href="{!! route('proyectos.inscripciones', $proyecto->id) !!}" class="btn btn-outline-dark btn-sm">ver todos</a>
            @endrole
        </div>
    </div>
</div>
{!! Form::close() !!}
