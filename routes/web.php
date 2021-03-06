<?php


Auth::routes();
Route::get('/logout', 'HomeController@logout'); // Log Out


Route::get('/', 'RoutesController@homePage'); // Home Page
Route::get('/about', 'RoutesController@aboutPage'); // About Page
Route::get('/contact', 'RoutesController@contactPage'); // Contact Page
Route::get('/courses', 'RoutesController@coursesPage'); // Courses Page
Route::get('/course/{slug}/{id}', 'RoutesController@coursesDetails'); // Course Single Page
Route::get('/courses/category/{id}', 'RoutesController@byCategory'); // Courses by category
Route::get('/terms-and-conditions', 'RoutesController@termsPage'); // Terms Page
Route::get('/privacy-policy', 'RoutesController@privacyPage'); // Privacy Page
Route::any('/courses/search' , 'RoutesController@search'); // Serach Course
Route::any('/templates/search' , 'RoutesController@searchTemplate'); // Serach Course
Route::post('/message', 'MessageController@send'); // Send Message

Route::get('/templates', 'TemplateController@index'); // Templates Page
Route::get('/template/{slug}/{id}' , 'TemplateController@show'); // Single Template





//Route::get('/blog' , 'BlogController@index' ); // Blog
//Route::get('/blog/{id}' , 'BlogController@show');

Route::post('/subscribe', 'RoutesController@subscribe');

// Authenticated Users
Route::group(['middleware' => 'auth'], function () {
    Route::post('/comment' , 'CommentController@store'); // Add Comment
    Route::get('/profile/{id}' , 'RoutesController@profile'); // User Profile
    Route::put('/user/update/{id}' , 'RoutesController@updateProfile'); // Update User Profile
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
    Route::get('/home/categories' , 'HomeController@categories'); // Categories View
    Route::get('/home/create/category' , 'HomeController@createCategory'); // Create Category View
    Route::post('/home/store/category', 'HomeController@storeCategory'); // Store Category

    Route::get('/home/templates', 'HomeController@templates'); // Templates
    Route::get('/home/create/template', 'HomeController@createTemplate'); // Create Template View
    Route::post('/home/store/template', 'HomeController@storeTemplate'); // Store Template
    Route::get('/home/template/edit/{id}', 'HomeController@editTemplate'); // Edit Template



    Route::get('/home/blog', 'BlogController@adminIndex');
    Route::get('/home/blog/create', 'BlogController@create');
    Route::post('/home/store/blog', 'BlogController@store');

});
