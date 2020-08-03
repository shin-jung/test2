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

Route::group(['prefix' => 'articles'], function () {
	Route::get('/', 'ArticleController@index'); 
	Route::get('/create', 'ArticleController@create');
	Route::post('/store', 'ArticleController@store');
	Route::get('/{id}', 'ArticleController@show');
	Route::get('/{id}/edit', 'ArticleController@edit');
	Route::patch('/{id}', 'ArticleController@update');
	Route::delete('/{id}', 'ArticleController@destory');
	Route::post('/create', 'ArticleController@createpost');
});