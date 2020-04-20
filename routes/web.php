<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Cine
$router->get('cines', 'CineController@index');
$router->get('cines/{id}', 'CineController@getById');
$router->post('cines', 'CineController@store');

//Salas
$router->get('cines/{cine_id}/salas', 'SalaController@getAllByCine');
$router->get('salas/{id}', 'SalaController@getById');
$router->post('salas', 'SalaController@store');

//Asientos
$router->get('salas/{sala_id}/asientos', 'AsientosController@getAllBySala');
$router->get('asientos/{id}', 'AsientosController@getById');
$router->post('asientos', 'AsientosController@store');

//Peliculas
$router->get('cines/{cine_id}/peliculas', 'PeliculasController@getAllByCine');
$router->get('peliculas/{id}', 'PeliculasController@getById');
$router->post('peliculas', 'PeliculasController@store');

//Horarios
$router->get('peliculas/{pelicula_id}/horarios','HorarioController@getAllByPelicula');
$router->get('horarios/{id}', 'HorarioController@getById');
$router->post('horarios', 'HorarioController@store');

//Usuarios
$router->get('usuarios','UserController@index');
$router->get('usuarios/{id}','UserController@getById');
$router->post('usuarios','UserController@store');

//Reservas
$router->get('reservas/{id}','ReservaController@getById');
$router->get('horarios/{horario_id}/reservas','ReservaController@getAllByHorario');
$router->get('peliculas/{pelicula_id}/reservas','ReservaController@getAllByPelicula');
$router->post('reservas','ReservaController@store');
