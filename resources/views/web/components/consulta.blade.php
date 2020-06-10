{!! Form::open(['url' => route('proyectos.store.message', $charla->id), 'method' => 'post', 'id' => 'form-consulta']) !!}

    {!! Form::hidden('proyecto_id', $charla->id) !!}

    <div class="form-group">
        <div id="error"></div>
        <div id="message"></div>
        <div class="text-success" id="table" style="display: none;"></div>
    </div>

{{--    @if($charla->publico)--}}
    @if($item->tipoProyecto() == 'Público')
        <div class="form-group">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'nombre']) !!}
        </div>
    @endif

    <div class="form-group">
        {!! Form::textarea('texto', null, ['class' => 'form-control', 'rows' => 6, 'placeholder' => 'Escriba aquí su consulta...', 'id' => 'texto']) !!}
    </div>
    <div class="form-group">
        <button type="button" id="btnSubmit" class="btn btn-outline-dark btn-xs">Enviar</button>
    </div>

{!! Form::close() !!}