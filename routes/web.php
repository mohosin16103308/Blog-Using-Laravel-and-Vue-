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


Route::get('/{anypath}', 'HomeController@index')->where('path','.*');

Route::post('/add/category', 'CategoryController@store')->name('addcategory');

Route::get('/category/edit/{id}', 'CategoryController@edit');

Route::post('/update/category/{id}','CategoryController@update')->name('updateCategory');
Route::get('/list/category', 'CategoryController@index')->name('listcategory');
Route::get("/delete/category/{id}",'CategoryController@destroy')->name('cat_delete');


// Route::get('posts', 'PostController@index')->name('home');

Route::post('/charge', 'PostController@checkout');

Route::get('/subscribe', function () {
    return view('subscribe');
});
Route::post('/subscribe_process', 'PostController@subscribe_process');


//Posts
// Get All Posts  
 Route::get('/list/posts', 'PostController@index');