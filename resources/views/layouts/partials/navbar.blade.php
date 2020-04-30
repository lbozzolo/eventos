<header class="main-header">

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="{{ route('admin') }}">
                <img src="{{ asset('images/logos/logo.png') }}" alt="logo" class="img-responsive" style="height: 100%"/>
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
                <img src="{{ asset('staradmin/images/icons/favicon-32x32.png') }}" alt="logo" style="height: 32px; width: 32px"/>
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center" style="background-image: linear-gradient(to right, lightskyblue , steelblue);">

            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    @if(Auth::user()->hasRole('Admin|Superadmin'))
                    <a href="{{ asset('/') }}" target="_blank" class="nav-link" style="color: white">
                        <i class="mdi mdi-web"></i>WebSite
                    </a>
                    @endif
                </li>
            </ul>

            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">{!! Auth::user()->full_name !!}</span>
                        <img class="img-xs rounded-circle" src="{{ asset('images/profile-picture.png') }}" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">


                        <!-- Authentication Links -->
                        @guest
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @else

                            <a  class="dropdown-item pt-3" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-exit-to-app"></i>
                                Cerrar sesión
                            </a>

                            <hr>

                            <span title="Cambiar contraseña" data-toggle="modal" data-target="#changePassword{!! Auth::user()->id !!}"
                                   style="cursor: pointer"
                                  class="text-danger dropdown-item">
                                <i class="mdi mdi-lock"></i> Cambiar contraseña
                            </span>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        @endguest

                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>

</header>



<!-- Modal -->
<div class="modal fade text-left" id="changePassword{!! Auth::user()->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => ['users.change.password', Auth::user()->id], 'method' => 'put']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Cambiar Contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    {!! Form::label('password', 'Ingrese una nueva contraseña') !!}
                    {!! Form::password('password', ['class' => 'form-control', 'minlength' => '6']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Reingrese la contraseña nueva') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'minlength' => '6']) !!}
                </div>
                <div class="form-group">
                    <small class="text-gray"><em>* La contraseña debe tener al menos 6 caracteres</em></small>
                </div>
            </div>
            <div class="modal-footer">

                <button title="Cambiar contraseña" type="submit" class="btn btn-sm btn-warning">Cambiar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>