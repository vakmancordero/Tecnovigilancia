<?php

Route::get('/', 'HomeController@index');

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');

Route::get('/users/all', 'UserController@listUsers');

Auth::routes();