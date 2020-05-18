<form class="contact__form-panel" action="{{ route('web.login', $charla->id) }}" method="post">

    {!! csrf_field() !!}

    <div class="row">
        <div class="col-lg-12">
            @include('vendor.flash.message')
        </div>
        <div class="col-sm-12 contact__form-panel-header">
            <p class="lead">Ingresá tu email y tu DNI, Nº de pasaporte o ID.</p>

        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="form-group">
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" autofocus>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="form-group">
                <input type="text" name="password" class="form-control" placeholder="DNI, pasaporte o ID">
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4">
            <button type="submit" class="btn btn__primary btn__block">Siguiente</button>
            <h5 class="text-black" style="margin-top: 30px">
                ¿Todavía no estás registrado?
                <a href="{!! route('web.charlas.registro', ['cliente' => $charla->cliente_slug, 'evento' => $charla->nombre_slug,  'id' => $charla->id]) !!}">regitrarse</a>
            </h5>

            <button title="Recuperar cuenta" type="button" data-toggle="modal"
                    data-target="#recuperarCuenta" class="text-celeste-oscuro">
                ¿Problemas para ingresar?
            </button>

        </div>
    </div>

</form>

<!-- Modal -->
<div class="modal fade" id="recuperarCuenta" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> ¿Problemas para ingresar?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['url' => route('users.reenvio.de.datos'), 'method' => 'post']) !!}
            <div class="modal-body">
                <p>Si tenés problemas para ingresar es posible que tus datos (email y dni) hayan sido registrados incorrectamente.</p>
                <p>
                    Te enviaremos un email con los mismos para poder verificarlo.
                    Recordá que para poder ver el evento debés identificarte ingresando los mismos.
                </p>
                <div class="form-group">
                    {!! Form::label('email_recuperacion', 'Ingresá tu email') !!}
                    {!! Form::email('email_recuperacion', null, ['class' => 'form-control', 'style' => 'width: 100%']) !!}
                </div>
            </div>
            <div class="modal-footer">

                <button title="Enviar" type="submit" class="btn btn-sm btn-primary">Enviar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>