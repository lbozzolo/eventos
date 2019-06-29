<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="{{ Request::is('usuarios*') ? 'active' : '' }} nav-item">
            <a href="{!! route('users.index') !!}" class="nav-link">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span >Usuarios</span>
            </a>
        </li>

        <li class="{{ Request::is('habitaciones*') ? 'active' : '' }} nav-item">
            <a href="{!! route('rooms.index') !!}" class="nav-link">
                <i class="mdi mdi-hotel menu-icon"></i>
                <span class="menu-title">Habitaciones</span>
            </a>
        </li>

        <li class="{{ Request::is('servicios*') ? 'active' : '' }} nav-item">
            <a href="{!! route('services.index') !!}" class="nav-link">
                <i class="mdi mdi-food-fork-drink menu-icon"></i>
                <span class="menu-title">Servicios</span>
            </a>
        </li>

        <li class="{{ Request::is('galería*') ? 'active' : '' }} nav-item">
            <a href="{!! route('galleries.index') !!}" class="nav-link">
                <i class="mdi mdi-image-album menu-icon"></i>
                <span class="menu-title">Galería</span>
            </a>
        </li>

        <li class="{{ Request::is('sliders*') ? 'active' : '' }} nav-item">
            <a href="{!! route('sliders.index') !!}" class="nav-link">
                <i class="mdi mdi-folder-multiple-image menu-icon"></i>
                <span class="menu-title">Sliders</span>
            </a>
        </li>

    </ul>
</nav>