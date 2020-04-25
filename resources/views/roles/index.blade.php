@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="view view-cascade gradient-card-header  narrower py-2  d-flex justify-content-between text-center align-items-center">
                    <div></div>
                    <h2 class="text-center">Roles y Permisos</h2>
                    <div></div>
                </div>

                <div class="card-body bg-white" style="background-color: white!important">
                    <div class="row">

                        <div class="col-lg-4">

                            @if($items->count())
                                <div class="table-responsive">
                                    @include('roles.table')
                                </div>
                            @else
                                <span class="text-muted">No se encontró ningún registro.</span>
                            @endif

                        </div>

                        <div class="col-lg-8">

                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        @foreach($items as $role)
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link @if ($loop->first) active @endif" id="role-tab{!! $role->id !!}" data-toggle="tab" href="#role{!! $role->id !!}" role="tab" aria-controls="home" aria-selected="false">{!! $role->name !!}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-body">

                                </div>
                                <div class="tab-content" id="myTabContent">
                                    @if($permissions->count())
                                        @foreach($items as $role)
                                            <div class="tab-pane fade @if ($loop->first) show active @endif" id="role{!! $role->id !!}" role="tabpanel" aria-labelledby="home-tab">

                                                {!! Form::open(['url' => route('roles.permissions'), 'method' => 'post']) !!}
                                                {!! Form::hidden('role_id', $role->id) !!}
                                                {!! Form::submit('Asignar Permisos Seleccionados', ['class' => 'btn btn-outline-primary btn-sm ml-3']) !!}

                                                <div class="card-body">
                                                    <div class="row">
                                                        @foreach($permissions as $permission)
                                                            @if($permissions->count())

                                                                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" style="border: 1px solid whitesmoke; border-radius: 5px">
                                                                    <span class="text-right">
                                                                        @can('asignar_permisos')
                                                                        {!! Form::checkbox('permissions[]', $permission->id, $role->hasPermissionTo($permission->name), ['id' => 'permiso'.$permission->id]) !!}
                                                                        @endcan
                                                                    </span>
                                                                    <label for="permiso{!! $permission->id !!}" class="text-left {!! ($role->hasPermissionTo($permission->name))? 'text-info' : '' !!}" style="font-size: 0.8em">
                                                                        {!! $permission->name !!}
                                                                    </label>
                                                                </div>

                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>

                                                {!! Form::close() !!}

                                            </div>
                                        @endforeach
                                    @else
                                        <div class="card-body tabss">
                                            <em class="text-gray">
                                                <small>No hay ningún permiso cargado</small>
                                            </em>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection