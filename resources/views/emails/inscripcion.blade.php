<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mensaje vía email de eventum.com.ar</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cTeko:400,500,600,700&display=swap">
    <link rel="stylesheet" href="http://eventum.com.ar/template-web/assets/css/libraries.css">
    <link rel="stylesheet" href="http://eventum.com.ar/template-web/assets/css/style.css">
    <link rel="stylesheet" href="http://eventum.com.ar/template-web/assets/css/estilos.css">
</head>

<body>
<div class="wrapper">

    <section class="blog blog-single pb-40">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-xs-12 col-sm-12" style="margin-bottom: 50px">
                    <img src="{!! $data['logo'] !!}" />
                </div>

                <div class="col-lg-9 col-xs-12 col-sm-12">
                    <div class="blog-item">

                        <div class="blog__content">

                            <h1 class="">Inscripción a evento online</h1>
                            <div class="blog__meta d-flex align-items-center">

                                <div class="blog__meta-cat">
                                    <span style="color: #149EA6">{!! $data['fullname'] !!}</span>
                                </div><br>
                                {{--<span class="blog__meta-date">{!! $data['email'] !!}</span>--}}

                            </div>

                            <strong>email: {!! $data['email'] !!}</strong><br>
                            <strong>id: {!! $data['dni'] !!}</strong><br>

                            <small>Organiza: {!! $data['cliente'] !!}</small><br>
                            <small>Evento: {!! $data['evento'] !!}</small><br>
                            <small>Fecha: {!! $data['fecha'] !!}</small>
                            <small>a las {!! $data['hora'] !!}</small>
                            <hr>
                            <div class="blog__desc mt-3">
                                <p class="text-success">
                                    Tenemos el agrado de informarte que has sido inscripto exitosamente al evento.
                                </p>
                                <p>
                                    Para asistir ingresa al siguiente enlace:
                                    <a href="{!! $data['url'] !!}" target="blank">click aquí</a>
                                </p>
                            </div>
                            <hr>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

</body>

</html>