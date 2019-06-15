
<div class="col-lg-7">

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>

    <div class="row">
        <div class="form-group col-lg-4">
            {!! Form::label('tiempo', 'Tiempo (minutos):') !!}
            {!! Form::number('tiempo', null, ['class' => 'form-control', 'min' => 1, 'max' => 240]) !!}
        </div>

        <div class="form-group col-lg-4">
            {!! Form::label('calorias', 'KCal:') !!}
            {!! Form::text('calorias', null, ['class' => 'form-control', 'style' => 'padding: 9px']) !!}
        </div>

        <div class="form-group col-lg-4">
            {!! Form::label('active', 'Estado:') !!}
            {!! Form::select('active', ['0' => 'Inactiva', '1' => 'Activa'], (isset($item))? $item->active : null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('url_video', 'Video de la receta') !!}
        {!! Form::text('url_video', null, ['class' => 'form-control', 'placeholder' => 'Coloque aquí la URL de su video...']) !!}
    </div>

</div>
<div class="col-lg-5">

    <div class="form-group">
        {!! Form::label('descripcion', 'Descripción:') !!}
        <div>
            {!! Form::textarea('descripcion', (isset($item)? $item->description : null), ['class' => 'form-control', 'rows' => '12', 'placeholder' => 'La descripción es opcional.']) !!}
        </div>
    </div>

</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-default">Cancelar</a>
</div>
