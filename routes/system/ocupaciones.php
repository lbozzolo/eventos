<?php

Route::group(['middleware' => ['can:mostrar_ocupaciones']], function () {

    Route::resource('ocupaciones', 'OcupacionController');

    Route::delete('ocupaciones/{id}/eliminar', [
        'as' => 'ocupaciones.delete',
        'uses' => 'OcupacionController@destroy'
    ]);

});

