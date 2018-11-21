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

Route::get('/', [
 'uses'  => 'NewShopController@index',
 'as'    =>  '/'
]);
Route::get('/category-products', [
 'uses'  => 'NewShopController@categoryProducts',
 'as'    =>  'category-products'
]);
