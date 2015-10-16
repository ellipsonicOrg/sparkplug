<?php


// Public / Guest routes

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'WelcomeController@home');


// Superadmin routes

Route::get('/superadmin/home', 'SuperadminController@index');

Route::get('/superadmin/ecosystem', 'SuperadminController@ecosystem');

Route::get('/superadmin/ecosystem/getUserRoleData', 'SuperadminController@getUserRoleData');

// Admin routes

Route::get('/admin/home', 'AdminController@index');



// Authentication routes

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');