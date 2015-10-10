<?php


Route::get('/', 'WelcomeController@index');

Route::get('/home', 'ActionController@index');

Route::get('/superadmin', 'SuperadminController@index');

// Authentication routes

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');