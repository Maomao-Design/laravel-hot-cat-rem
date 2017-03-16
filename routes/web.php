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


Route::get('/',['as' => 'root', 'uses' => 'HomeController@index']);

Route::get('page/{slug}', ['as' => 'page', 'uses' => 'PageController@index']);

Route::get('products', ['as' => 'products', 'uses' => 'ProductController@index']);
Route::get('product/categories', ['as' => 'productCategories', 'uses' => 'ProductController@category']);

Route::get('product/detail', ['as' => 'productDetail', 'uses' => 'ProductController@detail']);
Route::get('posts', ['as' => 'posts', 'uses' => 'PostController@index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
