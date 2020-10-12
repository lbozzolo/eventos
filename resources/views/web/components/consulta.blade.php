<div class="row">
    <div class="col-lg-12">
        <ul>
            @if($charla->encuestas->count())
                <li class="list-group-item">
                    <a href="{!! route('web.encuestas', $charla->id) !!}" target="_blank" class="btn__xs btn-outline-dark float-right" style="width: 100px">
                        responder
                    </a>
                    <p class="text-dark-green">Hay encuestas disponibles</p>
                </li>
            @endif
            @if($charla->materiales->count())
                <li class="list-group-item">
                    <a href="{!! route('web.comisiones', $charla->id) !!}" target="_blank" class="btn__xs btn-outline-dark float-right" style="width: 100px">
                        Ingresar
                    </a>
                    <p class="text-celeste-oscuro">Material relacionado</p>
                    {{--<p class="text-celeste-oscuro">Sala de posters</p>--}}
                </li>
            @endif
        </ul>
    </div>

    <div class="col-lg-12">
        {!! Form::open(['url' => route('proyectos.store.message', $charla->id), 'method' => 'post', 'id' => 'form-consulta']) !!}

        {!! Form::hidden('proyecto_id', $charla->id) !!}

        @if(isset($sala))
            {!! Form::hidden('iframe', $sala->id, ['id' => 'iframeid']) !!}
        @else
            {!! Form::hidden('iframe', ($charla->iframes->count())? $charla->iframes->first()->id : null, ['id' => 'iframeid']) !!}
        @endif

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
            {!! Form::textarea('texto', null, ['class' => 'form-control', 'rows' => '6', 'placeholder' => 'Escriba aquí su consulta para los oradores...', 'id' => 'texto']) !!}
        </div>
        <div class="form-group">
            <button type="button" id="btnSubmit" class="btn btn-outline-dark btn-xs">Enviar Consulta</button>

        </div>

        {!! Form::close() !!}
    </div>

    {{--<div class="col-lg-12">--}}
        {{--{!! dd($iframe) !!}--}}
    {{--</div>--}}

    {{--@if($charla->encuestas->count())--}}
        {{--<div class="col-lg-6 col-sm-6">--}}
            {{--<div class="card-encuesta card">--}}
                {{--<div class="service__content">--}}
                    {{--<p class="text-dark-green lead">Encuestas</p>--}}
                    {{--<p class="service__desc">Hay encuestas disponibles para responder</p>--}}
                    {{--<a href="{!! route('web.encuestas', $charla->id) !!}" target="_blank" class="btn__small btn-outline-dark">--}}
                        {{--responder--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--@if($charla->materiales->count())--}}
        {{--<div class="col-lg-6 col-sm-6">--}}
            {{--<div class="card-encuesta card">--}}
                {{--<div class="service__content">--}}
                    {{--<p  class="lead text-celeste-oscuro">Sala de Posters</p>--}}
                    {{--<p class="service__desc">Consulte nuestro material relacionado en la Sala de Posters</p>--}}
                    {{--<a href="{!! route('web.comisiones', $charla->id) !!}" target="_blank" class="btn__small btn-outline-dark">--}}
                        {{--Ingresar--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endif--}}
</div>

