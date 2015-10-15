<?php


// Public / Guest routes

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'WelcomeController@home');


// Superadmin routes

Route::get('/superadmin/home', 'SuperadminController@index');

Route::get('/superadmin/ecosystem', 'SuperadminController@ecosystem');


// Admin routes

Route::get('/admin/home', 'AdminController@index');

Route::get('/users', 'UsersController@index');

Route::get('/users/getSavedUsers', 'UsersController@listUsers');


// Authentication routes

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');