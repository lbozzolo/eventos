
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
    {!! Form::label('roles[]', 'Roles:') !!}
    {!! Form::select('roles[]', (isset($roles))? $roles : [], null, ['class' => 'form-control select2', 'multiple']) !!}
</div>

{{--@if($user->hasRole('Moderador'))--}}
    {{--<div class="form-group col-sm-12 col-lg-12">--}}
        {{--{!! Form::label('cliente_id', 'Clientes:') !!}--}}
        {{--{!! Form::select('cliente_id', (isset($clientes))? $clientes : [], ($user->cliente)? $user->cliente : null, ['class' => 'form-control select2']) !!}--}}
    {{--</div>--}}
{{--@endif--}}

<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancelar</a>
</div>
