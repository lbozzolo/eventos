<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li><hr></li>

        @can('editar_proyectos')
            <li class="{{ Request::is('admin*') ? 'active' : '' }} nav-item">
                <a href="{!! route('admin') !!}" class="nav-link">
                    <i class="mdi menu-icon {{ Request::is('admin*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                    <span class="menu-title">Home</span>
                </a>
            </li>
        @endcan

        @can('editar_proyectos')
        <li class="{{ Request::is('proyectos*') ? 'active' : '' }} nav-item">
            <a href="{!! route('proyectos.index') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('proyectos*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span class="menu-title">PROYECTOS</span>
            </a>
        </li>
        @endcan

        @can('mostrar_inscriptos')
        @role('Superadmin|Admin')
        <li class="{{ Request::is('inscripciones*') ? 'active' : '' }} nav-item">
            <a href="{!! route('users.inscripciones') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('inscripciones*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span class="menu-title">Inscripciones</span>
            </a>
        </li>
        @endrole
        @endcan

        @can('mostrar_perfil_cliente')
        <li class="{{ Request::is('perfil/*') ? 'active' : '' }} nav-item">
            <a href="{!! route('clientes.profile', Auth::user()->id) !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('perfil/*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span class="menu-title">Perfil</span>
            </a>
        </li>
        @endcan

        <li><hr></li>

        @can('mostrar_categorias')
        <li class="{{ Request::is('categorias*') ? 'active' : '' }} nav-item">
            <a href="{!! route('categorias.index') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('categorias*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span class="menu-title">Categorías</span>
            </a>
        </li>
        @endcan

        @can('mostrar_estados')
        <li class="{{ Request::is('estados*') ? 'active' : '' }} nav-item">
            <a href="{!! route('estados.index') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('estados*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span class="menu-title">Estados</span>
            </a>
        </li>
        @endcan

        @can('mostrar_clientes')
        <li class="{{ Request::is('clientes*') ? 'active' : '' }} nav-item">
            <a href="{!! route('clientes.index') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('clientes*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span class="menu-title">Clientes</span>
            </a>
        </li>
        @endcan

        @can('mostrar_auspiciantes')
        <li class="{{ Request::is('auspiciantes*') ? 'active' : '' }} nav-item">
            <a href="{!! route('auspiciantes.index') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('auspiciantes*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span class="menu-title">Auspiciantes</span>
            </a>
        </li>
        @endcan

        {{--<li class="{{ Request::is('sliders*') ? 'active' : '' }} nav-item">--}}
            {{--<a href="{!! route('sliders.index') !!}" class="nav-link">--}}
                {{--<i class="mdi menu-icon {{ Request::is('sliders*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>--}}
                {{--<span class="menu-title">Sliders</span>--}}
            {{--</a>--}}
        {{--</li>--}}

        @can('mostrar_newsletter')
        <li class="{{ Request::is('newsletter*') ? 'active' : '' }} nav-item">
            <a href="{!! route('newsletter.index') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('newsletter*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span class="menu-title">Newsletter</span>
            </a>
        </li>
        @endcan

        @can('mostrar_usuarios')
        <li class="{{ Request::is('users*') ? 'active' : '' }} nav-item">
            <a href="{!! route('users.index') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('users*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span >Usuarios</span>
            </a>
        </li>
        @endcan

        @can('mostrar_roles')
        <li class="{{ Request::is('roles*') ? 'active' : '' }} nav-item">
            <a href="{!! route('roles.index') !!}" class="nav-link">
                <i class="mdi menu-icon {{ Request::is('roles*') ? 'mdi-circle' : 'mdi-circle-outline' }}"></i>
                <span >Roles y permisos</span>
            </a>
        </li>
        @endcan

    </ul>
</nav>