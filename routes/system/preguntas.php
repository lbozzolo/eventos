<?php

Route::group(['middleware' => ['can:mostrar_preguntas']], function () {

    Route::resource('preguntas', 'PreguntaController');

    Route::post('preguntas/{idEncuesta}/crear', [
        'as' => 'preguntas.store',
        'uses' => 'PreguntaController@store'
    ]);

    Route::delete('preguntas/{id}/eliminar', [
        'as' => 'preguntas.delete',
        'uses' => 'PreguntaController@destroy'
    ]);

});

