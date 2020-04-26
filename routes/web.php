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

// ↓ドットインストール
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show')->where('post','[0-9]+');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::patch('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@destroy');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::delete('/posts/{post}/comments/{comment}', 'CommentsController@destroy');


// ↓テキスト学習
// Route::get('hello', function () {
//     return view('hello.index');
// });
// Route::get('/hello', 'HelloController@index');
// Route::post('/hello', 'HelloController@post');

// use App\Http\Middleware\HelloMiddleware;
// Route::get('/hello', 'HelloController@index')
//     ->middleware(HelloMiddleware::class);

// Route::get('/hello/other', 'HelloController@other');







// ↓ルーティングにRoute::resourceを指定することで、CRUDルーティングを一度にできる。
// local内でhttpsにURLを設定
Route::resource('profile', 'ProfileController');
if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}

Route::resource('playground', 'PlaygroundController');
if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}

Route::resource('matchmake', 'MatchmakeController');
if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}

Auth::routes();



// Route::get('/playground', function () {
        //  return view('playground');
//   });

// Route::get('hello', 'HelloController@post');


// Route::get('/home', 'HomeController@index')->name('home');
