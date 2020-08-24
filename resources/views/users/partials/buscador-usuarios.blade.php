<div class="row">
    @role('Superadmin|Admin')

    <div class="col-lg-6">

        {!! Form::open(['url' => route('users.search'), 'method' => 'get', 'class' => 'form']) !!}
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::text('search', null, ['class' => 'form-control mr-sm-2', 'autocomplete' => 'off', 'style' => 'border: 1px solid lightgray']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::submit('Buscar', ['class' => 'btn btn-outline-primary btn-sm']) !!}
                    @role('Superadmin|Admin')
                    <a href="{!! route('users.index') !!}" class="btn btn-outline-dark btn-sm">ver todos</a>
                    @endrole
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
    @endrole

</div>