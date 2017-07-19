<?php

#Admin Routes
Route::get('admin/login', 'AdminController@redirectToGoogle');
Route::get('admin/logout', 'AdminController@logout');
Route::get('admin/callback', 'AdminController@handleGoogleCallback');
Route::get('admin/notice', 'AdminController@notice');
Route::get('admin', 'AdminController@index');
#Content Routes
Route::resource('admin/users', 'UsersController');
Route::resource('admin/categories', 'CategoriesController');

#Frontend
Route::get('/', 'FrontendController@index');

