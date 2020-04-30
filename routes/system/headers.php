<?php

Route::group(['middleware' => ['can:mostrar_proyectos']], function () {

    Route::get('header/{id}', [
        'as' => 'headers.show',
        'uses' => 'HeaderController@show'
    ]);

    Route::get('header/{id}/edit', [
        'as' => 'headers.edit',
        'uses' => 'HeaderController@edit'
    ]);

});