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
        </div>
    </div>

</form>