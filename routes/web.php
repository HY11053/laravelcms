<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('demo',function (){
    return view('demo');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'],function(){
    Route::get('index','Admin\IndexController@index');
    Route::get('category','Admin\CategoryController@Index');
    Route::get('category/create','Admin\CategoryController@Create');
    Route::post('category/create','Admin\CategoryController@PostCreate')->name('category_create');
    Route::get('article','Admin\ArticleController@Index');
    Route::get('article/create','Admin\ArticleController@Create');
});
