<div class="form-group col-lg-12">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'style' => 'border: 1px solid #aaa']) !!}
</div>

<div class="form-group col-lg-12">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '5', 'style' => 'border: 1px solid #aaa']) !!}
</div>

<div class="form-group col-lg-12">
    {!! Form::label('cliente_id', 'Cliente') !!}
    {!! Form::select('cliente_id', (isset($clientes))? $clientes : [], null, ['class' => 'form-control select2', 'placeholder' => '']) !!}
</div>

<div class="form-group col-lg-8">
    {!! Form::label('categorias[]', 'Categoría') !!}
    {!! Form::select('categorias[]', (isset($categorias))? $categorias : [], null, ['class' => 'form-control select2']) !!}
</div>

<div class="form-group col-lg-4">
    {!! Form::label('tipo_id', 'Tipo de proyecto') !!}
    {!! Form::select('tipo_id', (isset($tipos))? $tipos : [], (isset($item->tipo_id))? $item->tipo_id : null, ['class' => 'form-control select2', 'placeholder' => '']) !!}
</div>

<div class="form-group col-lg-4">
    {!! Form::label('estado_id', 'Estado') !!}
    {!! Form::select('estado_id', (isset($estados))? $estados : [], (isset($item->estado_id))? $item->estado_id : null, ['class' => 'form-control select2']) !!}
</div>

<div class="form-group col-lg-4">
    {!! Form::label('fecha', 'Fecha y hora') !!}
    {!! Form::text('fecha', (isset($item))? $item->fecha_formatted : null, ['class' => 'form-control', 'id' => 'flatpickr' , 'autocomplete' => 'off', 'style' => 'background-color: white; border: 1px solid #aaa']) !!}
</div>

<div class="form-group col-lg-4">
    {!! Form::label('duracion', 'Duración') !!}
    {!! Form::text('duracion', (isset($item))? $item->duracion : null, ['class' => 'form-control', 'placeholder' => '2 hs', 'style' => 'background-color: white; border: 1px solid #aaa']) !!}
</div>


<div class="form-group col-lg-12">
    {!! Form::label('auspiciantes[]', 'Auspiciantes') !!}
    {!! Form::select('auspiciantes[]', (isset($auspiciantes))? $auspiciantes : [], null, ['class' => 'form-control select2m', 'multiple']) !!}
</div>

<div class="form-group col-lg-10">
    {!! Form::label('alert_message', 'Mensaje de alerta') !!}
    {!! Form::text('alert_message', (isset($item))? $item->alert_message : null, ['class' => 'form-control', 'placeholder' => '', 'style' => 'background-color: white; border: 1px solid #aaa']) !!}
</div>

<div class="form-group col-lg-2 mt-4">
    {!! Form::checkbox('alert_message_active', 1, (isset($item))? $item->alert_message_active : false) !!}
    <label for="alert_message_active" class="mt-2">Activo</label>
</div>

{{--<div class="form-group col-lg-6">--}}
    {{--<div class="form-check">--}}
        {{--<label class="form-check-label">--}}
            {{--<input name="publico" type="checkbox" class="form-check-input" value="1" {!! (isset($item->publico))? 'checked' : '' !!}> Público <i class="input-helper"></i>--}}
        {{--</label>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="form-group col-lg-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    @if(isset($item))
        <a href="{!! route($modelPlural.'.show', $item->id) !!}" class="btn btn-secondary">Cancelar</a>
    @else
        <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-secondary">Cancelar</a>
    @endif
</div>