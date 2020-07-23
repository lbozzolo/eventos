
<div class="row">

    <div class="col-lg-6">

        <div class="form-group col-sm-12">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('lastname', 'Apellido:') !!}
            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        </div>

        @if(isset($item) && !$item->paidUser() || !isset($item))
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('dni', 'DNI:') !!}
            {!! Form::text('dni', null, ['class' => 'form-control']) !!}
        </div>
        @endif

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('phone', 'Teléfono:') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('pais', 'País:') !!}
            {!! Form::select('pais', $paises, null, ['class' => 'form-control select3']) !!}
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('localidad', 'Localidad:') !!}
            {!! Form::text('localidad', null, ['class' => 'form-control']) !!}
        </div>

    </div>
    <div class="col-lg-6">

        <div class="form-group col-sm-12 col-lg-12">

            <div class="card-body" style="border: 1px solid lightgray; border-radius: 10px">
                {!! Form::label('ocupacion_id', 'Ocupación:') !!}
                {!! Form::select('ocupacion_id', $ocupaciones, null, ['class' => 'form-control select3', 'placeholder' => '', 'id' => 'ocupacionSelect']) !!}
                <p class="mt-3">
                    <span id="otraOcupacion" class="text-primary pl-3" style="cursor: pointer">Otra ocupación</span>
                </p>
                <div style="display: none" id="ocupacionTexto">
                    {!! Form::text('ocupacion', null, ['class' => 'form-control', 'id' => 'otraOcupacionInput']) !!}
                    <p class="mt-3">
                        <span id="predeterminadas" class="text-primary pl-3" style="cursor: pointer">Seleccionar de listado</span>
                    </p>
                </div>
            </div>

        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('proyectos[]', 'Proyectos:') !!}
            {!! Form::select('proyectos[]', $proyectos, null, ['class' => 'form-control select2', 'multiple']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('users.inscripciones') !!}" class="btn btn-default">Cancelar</a>
        </div>

    </div>

</div>



