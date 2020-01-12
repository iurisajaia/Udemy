<?php


Auth::routes();
Route::get('/logout', 'HomeController@logout'); // Log Out


Route::get('/', 'RoutesController@homePage'); // Home Page
Route::get('/about', 'RoutesController@aboutPage'); // About Page
Route::get('/contact', 'RoutesController@contactPage'); // Contact Page
Route::get('/courses', 'RoutesController@coursesPage'); // Courses Page
Route::get('/courses/{title?}/{id}', 'RoutesController@coursesDetails'); // Course Single Page
Route::get('/terms-and-conditions', 'RoutesController@termsPage'); // Terms Page
Route::get('/privacy-policy', 'RoutesController@privacyPage'); // Privacy Page
Route::any('/courses/search' , 'RoutesController@search'); // Serach Course
Route::post('/message', 'MessageController@send'); // Send Message

// Authenticated Users
Route::group(['middleware' => 'auth'], function () {
    Route::post('/comment' , 'CommentController@store'); // Add Comment
    Route::get('/profile/{id}' , 'RoutesController@profile'); // User Profile
});

// For Admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home'); // Admin Panel
    Route::get('/home/create', 'HomeController@create'); // Create Course View
    Route::get('/home/courses', 'HomeController@courses'); // Courses View
    Route::post('/home/create', 'HomeController@store'); // Create Course
    Route::delete('/home/delete/{id}', 'HomeController@destroy')->name('delete'); // Delete Course
    Route::get('/home/edit/{id}', 'HomeController@edit'); // Edit Course View
    Route::put('/home/update/{id}' , 'HomeController@update'); // Update Course
    Route::get('/home/messages', 'MessageController@index'); // Messages View
});