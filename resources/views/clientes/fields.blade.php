<div class="form-group col-lg-6">
    {!! Form::label('nombre', 'Nombre del Cliente') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'autofocus']) !!}
</div>

<div class="col-lg-6">
    <div class="card card-body mb-3">
        <h4>Datos del usuario</h4>
        <div class="row">
            @if(isset($item->user))
            {!! Form::hidden('user_id', $item->user->id) !!}
            @endif
            <div class="form-group col-lg-12">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', (isset($item->user))? $item->user->name : null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group col-lg-12">
                {!! Form::label('lastname', 'Apellido') !!}
                {!! Form::text('lastname', (isset($item->user))? $item->user->lastname : null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group col-lg-12">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', (isset($item->user))? $item->user->email : null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>


<div class="form-group col-lg-12">
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>