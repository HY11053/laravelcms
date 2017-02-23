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
Route::get('admin/login', 'Admin\AuthController@getLogin');
Route::post('admin/login', 'Admin\AuthController@postLogin');
Route::get('admin/register', 'Admin\AuthController@getRegister');
Route::post('admin/register', 'Admin\AuthController@postRegister');
Route::get('admin', 'AdminController@index');

Route::group(['prefix' => 'admin'],function(){
    Route::get('index','Admin\IndexController@index');
    Route::post('upload/images','Admin\ImageUploadController@ImagesUpload');
    Route::post('file-delete-batch','Admin\ImageUploadController@DeletePics');
    Route::get('category','Admin\CategoryController@Index');
    Route::get('category/create/{id?}','Admin\CategoryController@Create');
    Route::get('category/edit/{id}','Admin\CategoryController@Edit');
    Route::post('category/create','Admin\CategoryController@PostCreate')->name('category_create');
    Route::put('category/edit/{id}','Admin\CategoryController@PostEdit')->name('category_edit');
    Route::post('category/delete/{id}','Admin\CategoryController@DeleteCategory');
    Route::get('article','Admin\ArticleController@Index');
    Route::get('article/create','Admin\ArticleController@Create');
    Route::post('article/create','Admin\ArticleController@PostCreate')->name('article_create');
});

Route::resource('category','Admin\CategoryController');
