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
/*
Route::get('/', function () {
    return view('index');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/forms', function () {
    return view('forms-basic');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/updateing-news', 'NewsController@updateNews')->name('news_upate');

Route::get('/admin/news-update', 'NewsController@update_forms')->name('update_forms');

Route::get('/dashboard', 'NewsController@index')->name('dashboard');

Route::get('/', 'NewsController@gazette')->name('gazette');
