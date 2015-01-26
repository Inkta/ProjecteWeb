<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
Route::get('/home',array('uses' => 'HomeController@showWelcome'));

// Authentication
Route::get('login', array('as' => 'login', 'uses' => 'AuthController@showLogin'));
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');

Route::group(array('before' => 'auth'), function()
{
    Route::get('secret', 'HomeController@showSecret');
});

Route::get('/usuarios', array('uses' => 'UsuariosController@mostrarUsuarios'));

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));

Route::get('/contacto', array('as' => 'contacto', 'uses' => 'HomeController@contacto'));

Route::get('usuarios/nuevo', array('uses' => 'UsuariosController@nuevoUsuario'));

Route::post('usuarios/crear', array('uses' => 'UsuariosController@crearUsuario'));
// esta ruta es a la cual apunta el formulario donde se introduce la información del usuario
// como podemos observar es para recibir peticiones POST 

Route::get('usuarios/{id}', array('uses' => 'UsuariosController@verUsuario'));
// esta ruta contiene un parámetro llamado {id}, que sirve para indicar el id del usuario que deseamos buscar 

Route::get('/coches', array('uses' => 'CarrosController@mostrarCoches'));

Route::post('coches/crear', array('uses' => 'CarrosController@crearCoches'));



