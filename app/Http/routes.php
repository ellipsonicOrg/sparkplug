<?php


// Public / Guest routes

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'WelcomeController@home');


// Superadmin routes

Route::get('/superadmin/home', 'Roles\SuperadminController@index');

Route::get('/superadmin/ecosystem', 'Roles\SuperadminController@ecosystem');

Route::get('/superadmin/ecosystem/getUserRoleData', 'Roles\SuperadminController@getUserRoleData');

// Admin routes

Route::get('/admin/home', 'Roles\AdminController@index');


// Authentication routes

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');