@if(Auth::check())

    <div class="pt-4 pb-4">

        <span class="nav__item-link" style="border-bottom: 1px solid gray">
            <strong>usuario:</strong>
            {!! Auth::user()->fullname !!}
        </span>

        <a class="text-primary ml-3"
           href="{{ route('logout') }}"
           style="display: inline-block"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            <i class="mdi mdi-exit-to-app"></i>
            Cerrar sesión
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>

@endif