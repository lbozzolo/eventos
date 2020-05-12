<div class="row">
    <div class="col-lg-6">

        {!! Form::open(['url' => route('users.inscripciones.buscar'), 'method' => 'post', 'class' => 'form']) !!}

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::label('proyecto_id', 'Buscar por proyecto') !!}
                    {!! Form::select('proyecto_id', $proyectos, null, ['class' => 'form-control select2', 'placeholder' => '']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::submit('Buscar', ['class' => 'btn btn-outline-primary btn-sm mt-4']) !!}
                    <a href="{!! route('users.inscripciones') !!}" class="btn btn-outline-dark btn-sm mt-4">todos los proyectos</a>
                </div>
            </div>
        </div>

        {!! Form::close() !!}

    </div>
    <div class="col-lg-6">

        {!! Form::open(['url' => route('users.inscripciones.buscar.usuario'), 'method' => 'post', 'class' => 'form']) !!}
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::label('search', 'Buscar por usuario') !!}
                    {!! Form::text('search', null, ['class' => 'form-control mr-sm-2', 'autocomplete' => 'off', 'style' => 'border: 1px solid lightgray']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::submit('Buscar', ['class' => 'btn btn-outline-primary btn-sm mt-4']) !!}
                    <a href="{!! route('users.inscripciones') !!}" class="btn btn-outline-dark btn-sm mt-4">ver todos</a>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>