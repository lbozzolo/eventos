<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="{{ Request::is('usuarios*') ? 'active' : '' }} nav-item">
            <a href="{!! route('users.index') !!}" class="nav-link">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span >Usuarios</span>
            </a>
        </li>

        <li class="{{ Request::is('dietas*') ? 'active' : '' }} nav-item">
            <a href="{!! route('dietas.index') !!}" class="nav-link">
                <i class="mdi mdi-receipt menu-icon"></i>
                <span class="menu-title">Dietas</span>
            </a>
        </li>

        <li class="{{ Request::is('recetas*') ? 'active' : '' }} nav-item">
            <a href="{!! route('recetas.index') !!}" class="nav-link">
                <i class="mdi mdi-receipt menu-icon"></i>
                <span class="menu-title">Recetas</span>
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