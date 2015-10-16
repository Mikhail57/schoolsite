<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


Route::resource('articles', 'ArticlesController');

Route::any('admin/migrate-db', 'ArtisanController@migrate');