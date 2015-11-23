<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


Route::resource('articles', 'ArticlesController');
Route::get('/', 'ArticlesController@index');

Route::get('foo', ['middleware' => 'admin', function()
{
    return 'This page can only be viewed by admins';
}]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::any('admin/migrate-db', 'ArtisanController@migrate');