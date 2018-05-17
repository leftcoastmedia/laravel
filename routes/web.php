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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/front', function () {
    return view('frontpage');
});


Route::get('/about', function () {
 return redirect()->away('https://www.malhyman.com/#AboutMal');
});


Route::get('/donate', function () {
    return redirect()->away('https://secure.actblue.com/donate/tytmal');
});
Route::get('/issues', function () {
    return redirect()->away('https://www.malhyman.com/issues');
});

Route::get('/socialR', function () {
    return redirect()->away('https://www.twitter.com/mal4congress');
});
