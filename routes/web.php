<?php

use Illuminate\Support\Facades\Route;

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

//Backend
Route::group(['prefix' => 'admin','middleware'=>['auth','admin']],function(){
	Route::get('/dashboard', 'BackendController@index');

	Route::resource('/categories','CategoryController');

	Route::resource('/brands','BrandController');

	Route::resource('/subcategories','SubcategoryController');

	Route::resource('/colors','ColorController');

	Route::resource('/packages','PackageController');

	Route::resource('/items','ItemController');
});



//user login
Route::group(['middleware'=>'auth'], function() {
	Route::get('/order','OrderController@index');
});


Auth::routes(['verify'=>true]);


//Excel
Route::get('users/export', 'UsersController@export');







Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
