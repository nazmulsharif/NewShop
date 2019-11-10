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


Route::get('/',[
	'uses'	=>	'EcommerceController@index',
	'as'	=>	'/'

]);

Route::get('/category-product',[
	'uses'	=>	'EcommerceController@category',
	'as'	=>	'/category-product'

]);

Route::get('/category/add-category',[
	'uses'	=>'CategoryController@index',
	'as'	=>'/category/add-category'

]);
Route::get('/category/manage-category',[
	'uses'	=>'CategoryController@manageCategory',
	'as'	=>'/category/manage-category'

]);
Route::post('/category/save',[
	'uses'	=>'CategoryController@saveCategory',
	'as'	=>'new-category'

]);

Route::get('/category/unpublished/{id}',[
	'uses'	=>'CategoryController@unpublishedCategory',
	'as'	=>'unpublished-category'
]);
Route::get('/category/published/{id}',[
	'uses'	=>'CategoryController@publishedCategory',
	'as'	=>'published-category'
]);
Route::get('/category/edit/{id}',[
	'uses'	=>'CategoryController@editCategory',
	'as'	=>'edit-category'
]);
Route::post('/category/update',[
	'uses'	=>'CategoryController@updateCategory',
	'as'	=>'update-category'
]);
Route::get('/category/delete/{id}',[
	'uses'	=>'CategoryController@deleteCategory',
	'as'	=>'delete-category'
]);
Route::get('/brand/add-brand',[
	'uses'	=>'BrandController@index',
	'as'	=>'add-brand'
]);
Route::get('/brand/manage-brand',[
	'uses'	=>'BrandController@manageBrand',
	'as'	=>'manage-brand'
]);
Route::post('/brand/save',[
	'uses'	=>'BrandController@saveBrand',
	'as'	=>'save-brand'
]);
Route::get('/brand/unpublished/{id}',[
	'uses'	=>'BrandController@unpublishedBrand',
	'as'	=>'unpublished-brand'
]);
Route::get('/brand/published/{id}',[
	'uses'	=>'BrandController@publishedBrand',
	'as' 	=>'published-brand'
]);
Route::get('/brand/brand-edit/{id}',[
	'uses'	=>'BrandController@brandEdit',
	'as' 	=>'brand-edit'
]);
Route::post('/brand/brand-update',[
	'uses'	=>'BrandController@brandUpdate',
	'as'	=>'brand-update'
]);
Route::get('/brand/brand-delete/{id}',[
	'uses'	=>'BrandController@brandDelete',
	'as'	=>'brand-delete'
]);
Route::get('/product/add-product',[
	'uses'	=>'productController@index',
	'as'	=>'add-product'
]);
Route::get('/product/manage-product',[
	'uses'	=>'productController@manage',
	'as'	=>'manage-product'
]);
Route::post('/product/save-product',[
	'uses'	=>'productController@save',
	'as'	=>'save-product'
]);
Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
