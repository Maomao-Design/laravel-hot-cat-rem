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


Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('page/{slug}', ['as' => 'page', 'uses' => 'PageController@index']);

Route::get('down', ['as' => 'down', 'uses' => 'DownController@index']);
Route::get('down/file', ['as' => 'down.file', 'uses' => 'DownController@file']);

Route::get('brands', ['as' => 'brands', 'uses' => 'BrandController@index']);
Route::get('brand/{id}', ['as' => 'brand', 'uses' => 'BrandController@products']);

Route::get('product/{id}', ['as' => 'product', 'uses' => 'ProductController@detail']);
Route::get('products', ['as' => 'products', 'uses' => 'ProductController@search']);

Route::get('posts', ['as' => 'posts', 'uses' => 'PostController@index']);
Route::get('post/{id}', ['as' => 'post', 'uses' => 'PostController@detail']);

// SiteMap
//Route::get('sitemap', 'GeneratedController@siteMap');
//Route::get('sitemap.xml', 'GeneratedController@siteMap');
//
//// RSS Feed
//Route::get('feed.xml', 'GeneratedController@feed');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
