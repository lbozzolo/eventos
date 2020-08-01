<?php

Route::group(['middleware' => ['can:mostrar_opciones']], function () {

    Route::resource('opciones', 'OpcionController');

    Route::post('opciones/{idPregunta}/crear', [
        'as' => 'opciones.store',
        'uses' => 'OpcionController@store'
    ]);

});

