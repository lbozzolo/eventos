
<div class="col-lg-12">

    <div class="form-group">
        {!! Form::label('descripcion', 'Descripción:') !!}
        {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => 5]) !!}
    </div>

</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route($modelPlural.'.create', $receta->id) !!}" class="btn btn-outline-secondary">Volver</a>
</div>
