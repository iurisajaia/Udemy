<?php



Route::get('/', 'RoutesController@homePage');
Route::get('/about', 'RoutesController@aboutPage');
Route::get('/contact', 'RoutesController@contactPage');
Route::get('/courses', 'RoutesController@coursesPage');
Route::get('/courses/{id}', 'RoutesController@coursesDetails');
Route::get('/terms-and-conditions', 'RoutesController@termsPage');
Route::get('/privacy-policy', 'RoutesController@privacyPage');
Auth::routes();

Route::get('/register', 'HomeController@register');
Route::get('/logout', 'HomeController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/create', 'HomeController@create');
Route::get('/home/courses', 'HomeController@courses');