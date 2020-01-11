<?php



Route::get('/', 'RoutesController@homePage');
Route::get('/about', 'RoutesController@aboutPage');
Route::get('/contact', 'RoutesController@contactPage');
Route::get('/courses', 'RoutesController@coursesPage');
Route::get('/courses/{title?}/{id}', 'RoutesController@coursesDetails');
Route::get('/terms-and-conditions', 'RoutesController@termsPage');
Route::get('/privacy-policy', 'RoutesController@privacyPage');
Route::any('/courses/search' , 'RoutesController@search');

Route::post('/message', 'MessageController@send');
Route::get('/home/messages', 'MessageController@index');
Auth::routes();

Route::get('/register', 'HomeController@register');
Route::get('/logout', 'HomeController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/create', 'HomeController@create');
Route::get('/home/courses', 'HomeController@courses');
Route::post('/home/create', 'HomeController@store');
Route::delete('/home/delete/{id}', 'HomeController@destroy')->name('delete');
Route::get('/home/edit/{id}', 'HomeController@edit');
Route::put('/home/update/{id}' , 'HomeController@update');
