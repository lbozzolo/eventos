<?php

Route::group(['middleware' => ['can:mostrar_encuestas']], function () {

    Route::resource('encuestas', 'EncuestaController');

    Route::get('encuestas/{id}/crear', [
        'as' => 'encuestas.create',
        'uses' => 'EncuestaController@create'
    ]);

    Route::post('encuestas/{idProyecto}/crear', [
        'as' => 'encuestas.store',
        'uses' => 'EncuestaController@store'
    ]);

});

