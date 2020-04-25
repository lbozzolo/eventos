<?php

Route::get('permisos/index', [
    'as' => 'permissions.index',
    'uses' => 'PermissionController@index'
]);

Route::get('permisos/create', [
    'as' => 'permissions.create',
    'uses' => 'PermissionController@create'
]);

Route::get('permisos/{id}/edit', [
    'as' => 'permissions.edit',
    'uses' => 'PermissionController@edit'
]);

Route::post('rolpermisoses/store', [
    'as' => 'permissions.store',
    'uses' => 'PermissionController@store'
]);

Route::put('permisos/{id}/update', [
    'as' => 'permissions.update',
    'uses' => 'PermissionController@update'
]);

Route::delete('permisos/{id}/delete', [
    'as' => 'permissions.delete',
    'uses' => 'PermissionController@delete'
]);