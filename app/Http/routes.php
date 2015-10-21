<?php


/*
|--------------------------------------------------------------------------
| In-built routes
|--------------------------------------------------------------------------
|
| These routes are always needed for the basic functionality
| of Sparkplug app, all custom modules reside below these
|
*/

// Public / Guest routes

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'WelcomeController@home');

// Authentication routes

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');


// Superadmin routes and Admin routes

Route::get('/superadmin/home', array('as' => 'superadmin', 'uses' => 'Roles\SuperadminController@index'));

Route::get('/admin/home', array('as' => 'admin', 'uses' => 'Roles\AdminController@index'));


/*
|--------------------------------------------------------------------------
| Custom module routes
|--------------------------------------------------------------------------
|
| Named routes for custom modules, all these names are the lowercase of
| module names in the Module table of the database.
|
*/

// Modules

Route::get('/core', array('as' => 'core', 'uses' => 'Modules\CoreController@index'));


