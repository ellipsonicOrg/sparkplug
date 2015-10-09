<?php


Route::get('/', 'WelcomeController@index');

Route::get('/home', 'ActionController@index');

Route::get('/superadmin', 'SuperadminController@index');

Route::get('/login',function() {

    Auth::loginUsingId(1);

});

Route::get('/logout',function() {

    Auth::logout();

});
