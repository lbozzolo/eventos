
{!! Form::hidden('type', $type) !!}

<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    <div>
        {!! Form::textarea('description', null, ['class' => 'form-control summernote', 'rows' => '12', 'placeholder' => 'La descripción es opcional.']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('services[]', 'Servicios') !!}
    <div>
        {!! Form::select('services[]', $services, null, ['multiple', 'class' => 'form-control', 'id' => 'selectize']) !!}
    </div>
</div>


<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {{--    <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-default">Cancelar</a>--}}
    <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-outline-secondary">Volver</a>
</div>
