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

Route::get('test', [
    'as' => 'test',
    'uses' => 'WebController@test'
]);

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

Route::get('eventos', [
    'as' => 'web.charlas',
    'uses' => 'WebController@charlas'
]);

Route::get('eventos/{cliente}/{evento}/{id}', [
    'as' => 'web.charlas.show',
    'uses' => 'WebController@showCharla'
]);

Route::get('eventos/{cliente}/{evento}/{id}/ingresar', [
    'as' => 'web.charlas.ingresar',
    'uses' => 'WebController@ingresarCharla'
]);

Route::get('eventos/{cliente}/{evento}/{id}/inscripcion', [
    'as' => 'web.charlas.inscripcion',
    'uses' => 'WebController@inscripcion'
]);

Route::get('eventos/{cliente}/{evento}/{id}/registro', [
    'as' => 'web.charlas.registro',
    'uses' => 'WebController@registro'
]);

Route::post('eventos/{id}/registro', [
    'as' => 'web.post.registro',
    'uses' => 'WebController@postRegistro'
]);

Route::get('evento-inscripcion/{userId}/{eventoId}', [
    'as' => 'web.get.registro',
    'uses' => 'WebController@getRegistro2'
]);

Route::post('eventos/{id}/registro-e-inscripcion', [
    'as' => 'web.post.registro.2',
    'uses' => 'WebController@postRegistro2'
]);

Route::get('iniciar-sesion/{cliente?}/{evento?}/{id?}', [
    'as' => 'web.iniciar-sesion',
    'uses' => 'WebController@iniciarSesion'
]);

Route::post('ingresar/{charla?}', [
    'as' => 'web.login',
    'uses' => 'WebController@login'
]);

Route::get('nosotros', [
    'as' => 'web.nosotros',
    'uses' => 'WebController@nosotros'
]);

Route::get('contactanos', [
    'as' => 'web.contactanos',
    'uses' => 'WebController@contactanos'
]);

Route::post('post-contact/send/email', [
    'as' => 'web.post.contact',
    'uses' => 'WebController@postContact'
]);

Route::post('newsletter', [
    'as' => 'web.newsletter',
    'uses' => 'WebController@newsletter'
]);

Route::post('proyectos/{id}/consultar', [
    'as' => 'proyectos.store.message',
    'uses' => 'ProyectoController@storeMessage'
]);

Route::post('consultar', [
    'as' => 'proyectos.store.consulta',
    'uses' => 'ProyectoController@storeConsulta'
]);

Route::post('reenvio-de-datos', [
    'as' => 'users.reenvio.de.datos',
    'uses' => 'UserController@reenvioDeDatos'
]);

Route::get('/home', 'WebController@index');






