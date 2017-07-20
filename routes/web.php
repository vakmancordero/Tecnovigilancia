<?php

// Inicio
Route::get('/', 'HomeController@index');

// Rutas de módulo Usuario
Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::get('/users/all', 'UserController@listUsers');

// Rutas de módulo Calendario
Route::get('/calendar', 'CalendarController@index');

Auth::routes();