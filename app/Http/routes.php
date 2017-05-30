<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Pages routes
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});


// Post article routes
Route::resource('posts', 'PostsController');


// User routes
Route::resource('users', 'UsersController');

Route::get('/users', function () {
    return view('users.index');
});

Route::get('/users/{id}/edit', function ($id) {
    return view('users.edit');
});

Route::get('/users/{id}', function ($id) {
    return view('users.show');
});


// Voting routes
Route::post('/posts/add-vote', 'PostsController@addVote');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


