<?php

Route::group(['middleware' => ['can:mostrar_estados']], function () {

    Route::resource('estados', 'EstadoController');

});

