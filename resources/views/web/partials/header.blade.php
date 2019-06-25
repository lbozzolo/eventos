<section class="top-bar dhomev">
    <div class="container">
        <div class="pull-left left-infos contact-infos">
            <ul class="list-inline">
                <li>
                    <a href="#"><i class="fa fa-phone"></i> 02948 49-5080</a>
                </li><!-- comment for inline hack
                     --><li>
                    <a href="#"><i class="fa fa-map-marker"></i> 8 de Abril S/n, Caviahue, Neuquén</a>
                </li><!-- comment for inline hack
                     --><li>
                    <a href="#"><i class="fa fa-envelope"></i> info@kallfu.com</a>
                </li>
            </ul>
        </div><!-- /.pull-left left-infos -->

    </div><!-- /.container -->
</section><!-- /.top-bar -->

<nav class="navbar navbar-default  _fixed-header _light-header stricky" id="main-navigation-wrapper">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ asset('template-web/') }}index.html" class="navbar-brand">
                <img alt="Awesome Image" src="{{ asset('template-web/images/header/logo2.png') }}">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-nav ">
                <li><a href="{{ route('home') }}" role="button" aria-haspopup="true" aria-expanded="false">Home </a></li>
                <li><a href="{{ route('web.nosotros') }}" role="button" aria-haspopup="true" aria-expanded="false">Nosotros </a></li>
                <li><a href="{{ route('web.services') }}">Servicios</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Habitaciones <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-submenu dropdown-menu">
                        <li><a href="{{ route('web.habitaciones', 'doble') }}">Dobles</a></li>
                        <li><a href="{{ route('web.habitaciones', 'triple') }}">Triples</a></li>
                        <li><a href="{{ route('web.habitaciones', 'cuadruple') }}">Cuadruples</a></li>
                        <li><a href="{{ route('web.habitaciones', 'sextuple') }}">Séxtuples</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('web.galeria') }}" role="button" aria-haspopup="true" aria-expanded="false">Galería </a></li>

                <li><a href="{{ route('web.reservas') }}" role="button" aria-haspopup="true" aria-expanded="false">Reservas </a></li>
                <li><a href="{{ route('web.contacto') }}" role="button" aria-haspopup="true" aria-expanded="false">Contactanos </a></li>
            </ul>
        </div>
    </div>
</nav>