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

// ↓ルーティングにRoute::resourceを指定することで、CRUDルーティングを一度にできる。
// local内でhttpsにURLを設定
Route::get('profile', function () {
    return view('profile.index');
});
// Route::resource('/profile', 'ProfileController');
// if (env('APP_ENV') === 'local') {
//     URL::forceScheme('https');
// }
Route::get('/playground', function() {
  return view('profile.playground');
});
Route::get('/matchmake', function() {
  return view('profile.matchmake');
});

Auth::routes();
Auth::logout();
