{!! Form::open(['url' => route('proyectos.store.message', $charla->id), 'method' => 'post', 'id' => 'form-consulta']) !!}

    {!! Form::hidden('proyecto_id', $charla->id) !!}
    {!! Form::hidden('iframe', ($charla->iframes->count())? $charla->iframes->first()->id : null, ['id' => 'iframeid']) !!}

    <div class="form-group">
        <div id="error"></div>
        <div id="message"></div>
        <div class="text-success" id="table" style="display: none;"></div>
    </div>

    {{--@if($charla->iframes->count() > 1)--}}
        {{--<div class="form-group" style="padding-bottom: 30px">--}}
            {{--{!! Form::label('iframe_id', 'Seleccione la sala en la cual desea efectuar su consulta') !!}--}}
            {{--{!! Form::select('iframe_id', $charla->iframes->pluck('title', 'id'), null, ['class' => 'form-control', 'id' => 'iframe']) !!}--}}
        {{--</div>--}}
    {{--@endif--}}

    @if($charla->tipoProyecto() == 'Público')
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
        @if($charla->encuestas->count())
        <a href="{!! route('web.encuestas', $charla->id) !!}" target="_blank" class="btn btn-xs btn-outline-primary text-primary">
            Responder encuesta <i class="fa fa-file-text"></i>
        </a>
        @endif
        @if($charla->materiales->count())
            <a href="{!! route('web.material', $charla->id) !!}" class="btn btn-xs btn-outline-info text-info">
                Material <i class="fa fa-file-pdf-o"></i>
            </a>
        @endif
    </div>

{!! Form::close() !!}