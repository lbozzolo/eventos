<?php

Route::group(['middleware' => ['can:mostrar_roles']], function () {

    Route::get('roles/index', [
        'as' => 'roles.index',
        'uses' => 'RoleController@index'
    ]);

    Route::get('roles/create', [
        'as' => 'roles.create',
        'uses' => 'RoleController@create'
    ]);

    Route::get('roles/{id}/edit', [
        'as' => 'roles.edit',
        'uses' => 'RoleController@edit'
    ]);

    Route::post('roles/store', [
        'as' => 'roles.store',
        'uses' => 'RoleController@store'
    ]);

    Route::put('roles/{id}/update', [
        'as' => 'roles.update',
        'uses' => 'RoleController@update'
    ]);

    Route::delete('roles/{id}/eliminar', [
        'as' => 'roles.delete',
        'uses' => 'RoleController@delete'
    ]);

    Route::post('roles/permisos', [
        'as' => 'roles.permissions',
        'uses' => 'RoleController@permissions'
    ]);

});