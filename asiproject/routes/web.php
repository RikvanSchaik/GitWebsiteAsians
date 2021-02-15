<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

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

Route::get('/', '\App\Http\Controllers\PageManager@index');
Route::get('/about', '\App\Http\Controllers\PageManager@about')->name('about');
// Route::get('/posts', '\App\Http\Controllers\PageManager@posts')->name('posts');
Route::get('/rules', '\App\Http\Controllers\PageManager@rules')->name('rules');




// Route::get('/','PagesController@index');
// Route::get('/','PagesController@index');


// Route::get('/hello', function () {
//     //return view('welcome');
//     return 'Hello World!';
// });

// Route::get('/about', function () {
//     return view ('pages.about');
// });

Route::get('/users/{id}', function ($id) {
    return 'This is a user ' . $id; 
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/about', 'about');

Route::resource('posts', PostsController::class);




