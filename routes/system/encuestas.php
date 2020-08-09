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

    Route::get('encuestas/{id}/respuestas', [
        'as' => 'encuestas.respuestas',
        'uses' => 'EncuestaController@respuestas'
    ]);

    Route::delete('encuestas/{id}/eliminar', [
        'as' => 'encuestas.delete',
        'uses' => 'EncuestaController@destroy'
    ]);

});

