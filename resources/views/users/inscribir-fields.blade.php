
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

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('dni', 'DNI:') !!}
            {!! Form::text('dni', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('phone', 'Teléfono:') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>

    </div>
    <div class="col-lg-6">

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('pais', 'Localidad:') !!}
            {!! Form::select('pais', $paises, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('localidad', 'Localidad:') !!}
            {!! Form::text('localidad', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('ocupacion', 'Ocupación:') !!}
            {!! Form::text('ocupacion', null, ['class' => 'form-control']) !!}
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



