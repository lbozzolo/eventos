<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require(__DIR__ . '/admin.php');

Route::get('/', function () {
    return redirect('home');
});

Route::get('home', function () {
    return redirect('web');
});



Route::get('/', [
    'as' => 'home',
    'uses' => 'WebController@index'
]);

Route::get('habitaciones/{type}', [
    'as' => 'web.habitaciones',
    'uses' => 'WebController@habitaciones'
]);

Route::get('servicios', [
    'as' => 'web.services',
    'uses' => 'WebController@services'
]);

Route::get('nosotros', [
    'as' => 'web.nosotros',
    'uses' => 'WebController@nosotros'
]);

Route::get('galeria', [
    'as' => 'web.galeria',
    'uses' => 'WebController@galeria'
]);

Route::get('reservas', [
    'as' => 'web.reservas',
    'uses' => 'WebController@reservas'
]);

Route::get('contacto', [
    'as' => 'web.contacto',
    'uses' => 'WebController@contacto'
]);

Route::post('post-contact/send/email', [
    'as' => 'web.post.contact',
    'uses' => 'WebController@postContact'
]);

Route::post('pre-reserva', [
    'as' => 'pre.reserva',
    'uses' => 'WebController@preReserva'
]);

Route::post('newsletter', [
    'as' => 'web.newsletter',
    'uses' => 'WebController@newsletter'
]);


Route::get('/home', 'WebController@index');






