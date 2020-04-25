@if(Auth::check())
    @role('Inscripto|Superadmin')
    <div class="d-none d-lg-block text-center nav-item float-right">
        <span class="nav__item-link" style="border-bottom: 1px solid gray">{!! Auth::user()->fullname !!}</span>
        <a  class="dropdown-item text-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
            <i class="mdi mdi-exit-to-app"></i>
            Cerrar sesión
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    @endrole
@else
    {{--<div class="d-none d-lg-block text-center nav-item float-right">--}}
        {{--<a  class="dropdown-item text-primary" href="{{ route('web.iniciar-sesion', ['cliente' => $charla->cliente_slug, 'id' => $charla->id]) }}">--}}
            {{--<i class="mdi mdi-exit-to-app"></i>--}}
            {{--Iniciar sesión--}}
        {{--</a>--}}
    {{--</div>--}}
@endif