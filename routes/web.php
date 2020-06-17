<?php

use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (Request $request) {
    return view('welcome')->with('song', Song::take(1)->get());
});

Auth::routes();
Route::resource('/categories/songs', 'SongsController');
Route::resource('/categories/news', 'NewsController');
Route::resource('/categories/videos', 'VideosController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@hi')->name('songs.promote');
Route::post('/search', 'SearchController@searchMusic')->name('music.search');