<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return view('hello.index');
// });
// Route::get('/hello', 'HelloController@index');

// Route::get('/', 'PostController@index');
// Route::resource('posts', 'PostController');

Route::resource('profile', 'ProfileController');
if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}

Route::resource('playground', 'PlaygroundController');
if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}

// Route::get('/playground', function () {
        //  return view('playground');
//   });

// Route::get('hello', 'HelloController@post');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
