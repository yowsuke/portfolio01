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

// Route::get('/posts', function () {
//   return view('welcome');
// });
Route::get('/posts', 'PostController@index');
Route::resource('/posts', 'PostController');


// Route::get('/playgrounds', 'PlaygroundController@index');
Route::resource('/playgrounds', 'PlaygroundController');


// Route::get('/matchmakes', 'MatchmakeController@index');
Route::resource('/matchmakes', 'MatchmakeController');


// ↓ルーティングにRoute::resourceを指定することで、CRUDルーティングを一度にできる。
// local内でhttpsにURLを設定
Route::get('profile', function () {
    return view('profile.index');
});
Route::resource('/profile', 'ProfileController');

Route::get('/playground', function() {
  return view('profile.playground');
});

Route::get('/playground2', function() {
  return view('profile.playground2');
});

Route::get('/matchmake', function() {
  return view('profile.matchmake');
});


Route::get('/hello', 'HelloController@index');
Route::resource('/hello', 'HelloController');

if (env('APP_ENV') === 'local') {
  URL::forceScheme('https');
} 

Auth::routes();
Auth::logout();
