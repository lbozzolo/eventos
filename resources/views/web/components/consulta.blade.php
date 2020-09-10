<div class="row">
    @if($charla->encuestas->count())
        <div class="col-lg-6 col-sm-6">
            <div class="service-item card">
                <div class="service__content">
                    <h4 class="service__title text-dark-green">Encuestas</h4>
                    <p class="service__desc">Hay encuestas disponibles para responder</p>
                    <a href="{!! route('web.encuestas', $charla->id) !!}" target="_blank" class="btn__small btn-outline-dark">
                        responder
                    </a>
                </div>
            </div>
        </div>
    @endif
    @if($charla->materiales->count())
        <div class="col-lg-6 col-sm-6">
            <div class="service-item card">
                <div class="service__content">
                    <h5  class="service__title text-celeste-oscuro">Sala de Posters</h5>
                    <p class="service__desc">Consulte nuestro material relacionado en la Sala de Posters</p>
                    <a href="{!! route('web.comisiones', $charla->id) !!}" target="_blank" class="btn__small btn-outline-dark">
                        Ingresar
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>

{!! Form::open(['url' => route('proyectos.store.message', $charla->id), 'method' => 'post', 'id' => 'form-consulta']) !!}

    {!! Form::hidden('proyecto_id', $charla->id) !!}
    {!! Form::hidden('iframe', ($charla->iframes->count())? $charla->iframes->first()->id : null, ['id' => 'iframeid']) !!}

    <div class="form-group">
        <div id="error"></div>
        <div id="message"></div>
        <div class="text-success" id="table" style="display: none;"></div>
    </div>

    @if($charla->tipoProyecto() == 'Público')
        <div class="form-group">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'nombre']) !!}
        </div>
    @endif

    <div class="form-group">
        {!! Form::textarea('texto', null, ['class' => 'form-control', 'rows' => 6, 'placeholder' => 'Escriba aquí su consulta para los oradores...', 'id' => 'texto']) !!}
    </div>
    <div class="form-group">
        <button type="button" id="btnSubmit" class="btn btn-outline-dark btn-xs">Enviar Consulta</button>

    </div>

{!! Form::close() !!}