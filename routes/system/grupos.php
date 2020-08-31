<?php

Route::group(['middleware' => ['can:editar_grupos']], function () {

    Route::resource('grupos', 'GrupoController');

    Route::get('grupos/{id}/imagenes', [
        'as' => 'grupos.imagenes',
        'uses' => 'GrupoController@imagenes'
    ]);


});

