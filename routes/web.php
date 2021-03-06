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
Route::get('/category-products/{id}', [
 'uses'  => 'NewShopController@categoryProducts',
 'as'    =>  'category-products'
]);
Route::get('/products-details/{id}', [
 'uses'  => 'NewShopController@ProductsDetails',
 'as'    =>  'products-details'
]);
Route::get('/mail-us', [
 'uses'  => 'NewShopController@mailUs',
 'as'    =>  'mail-us'
]);

Route::get('/category/add', [
 'uses'  => 'categoryController@index',
 'as'    =>  'add-category'
]);

Route::get('/category/manage', [
 'uses'  => 'categoryController@manageCategory',
 'as'    =>  'manage-category'
]);
Route::post('/category/save', [
 'uses'  => 'categoryController@saveCategory',
 'as'    =>  'new-category'
]);

Route::get('/category/unpublished/{id}', [
 'uses'  => 'categoryController@unpublishedCategory',
 'as'    =>  'unpublished-category'
]);
Route::get('/category/published/{id}', [
 'uses'  => 'categoryController@publishedCategory',
 'as'    =>  'publish-category'
]);
Route::get('/category/edit/{id}', [
 'uses'  => 'categoryController@editCategoryInfo',
 'as'    =>  'edit-category'
]);
Route::post('/category/update', [
 'uses'  => 'categoryController@updateCategoryInfo',
 'as'    =>  'update-category'
]);
Route::get('/category/delete/{id}', [
 'uses'  => 'categoryController@deleteCategoryInfo',
 'as'    =>  'delete-category'
]);
Route::get('/brand/add', [
 'uses'  => 'brandController@index',
 'as'    =>  'add-brand'
]);
Route::post('/brand/save', [
 'uses'  => 'brandController@saveBrand',
 'as'    =>  'new-brand'
]);
Route::get('/product/add', [
 'uses'  => 'productController@index',
 'as'    =>  'add-product'
]);
Route::post('/product/save', [
 'uses'  => 'productController@saveProduct',
 'as'    =>  'new-product'
]);
Route::get('/product/manage', [
 'uses'  => 'productController@manageProduct',
 'as'    =>  'manage-product'
]);

Route::get('/product/edit/{id}', [
 'uses'  => 'productController@editProduct',
 'as'    =>  'edit-product'
]);

Route::post('/addToCart', [
 'uses'  => 'cartController@addToCart',
 'as'    =>  'add-to-card'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
