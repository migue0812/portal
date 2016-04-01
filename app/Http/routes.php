<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
    'home/index' => "Modulos\Home\IndexController",
    'home/busqueda' => "Modulos\Home\BusquedaController",
    'home/categoria' => "Modulos\Home\CategoriaController",
    'home/categoriadet' => "Modulos\Home\CategoriaController",
    'home/sitio' => "Modulos\Home\SitioController",
    'home/sitiodet' => "Modulos\Home\SitioController",
    'usuario' => "Modulos\Usuario\UsuarioController",
    'home/evento' => "Modulos\Home\EventoController",
    'home/itinerario' => "Modulos\Home\ItinerarioController",
    'seguridad' => "Modulos\Seguridad\SeguridadController",
    'panelcontrol' => "Modulos\Home\PanelControlController",
    
]);

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
    //
});
