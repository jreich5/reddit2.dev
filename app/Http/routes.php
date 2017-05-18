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

// other pages

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});


// posts pages

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/posts/create', function () {
    return view('posts.create');
});

Route::get('/posts/{id}', function ($id) {
    return view('posts.show');
});

Route::get('/posts/{id}/edit', function ($id) {
    return view('posts.edit');
});



// users pages

Route::get('/users', function () {
    return view('users.index');
});

Route::get('/users/{id}/edit', function ($id) {
    return view('users.edit');
});

Route::get('/users/{id}', function ($id) {
    return view('users.show');
});


// auth pages

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/auth/register', function () {
    return view('auth.register');
});


