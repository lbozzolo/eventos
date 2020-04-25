<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 footer__widget footer__widget-about">
                    <h6 class="footer__widget-title">Formas de Contacto</h6>
                    <div class="footer__widget-content">
                        <p class="color-gray">Para mayor información ponete en contacto con nuestro equipo de trabajo.</p>
                        <p class="footer__contact-phone">
                            <i class="icon-phone"></i>
                            <a href="tel:{!! config('sistema.data.phone') !!}">{!! config('sistema.data.phone') !!}</a>
                        </p>
                        <p>Av. Libertador 1111, Ciudad Autónoma de Buenos Aires<br>1428 Argentina.</p>
                        <ul class="social__icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul><!-- /.social-icons -->
                    </div>
                </div><!-- /.col-xl-3 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2 offset-xl-1 footer__widget footer__widget-nav">

                    <div class="footer__widget-content">
                        <nav>
                            <ul class="list-unstyled">

                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2 footer__widget footer__widget-nav">

                    <div class="footer__widget-content">
                        <nav>

                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-12 col-md-10 col-lg-6 col-xl-4 footer__widget footer__widget-newsletter">
                    <div class="footer__widget-content">
                        <p>Dejanos tu email y recibe nuestras novedades</p>
                        <form class="widget__newsletter-form">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Tu direccion de email">
                                <button type="submit" class="btn btn__primary btn__hover2">
                                    <i class="icon-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <img src="{!! asset('images/logos/logo_eventum_mono_light.png') !!}" alt="logo" height="140">
{{--                    <img src="{!! asset('template-web/assets/images/logo/logo-footer.png') !!}" alt="logo">--}}
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-12 col-md-9 col-lg-9 text-right">
                    <div class="footer__copyright">
                        <nav>
                            <ul class="footer__copyright-links list-unstyled d-flex flex-wrap justify-content-end">
                                <li><a href="#">Terminos & Condiciones </a></li>
                                <li><a href="#">Politica y Privacidad</a></li>
                            </ul>
                        </nav>
                        <p class="mb-0"> &copy; 2020 Charlasvirtuales.com.ar, Derechos en Trámite. Desarrollado por
                            <a href="http://verticedigital.com.ar/" target="_new">Verticedigital.com.ar</a>
                        </p>
                    </div><!-- /.Footer-copyright -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.Footer-bottom -->
</footer><!-- /.Footer -->