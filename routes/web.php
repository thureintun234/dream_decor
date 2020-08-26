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

// Route::get('/', function () {
//     return view('welcome');
// });

//Backend
Route::group(['prefix' => 'admin','middleware'=>['auth','admin']],function(){
	Route::get('/dashboard', 'BackendController@index')->name('dashboard');

	Route::resource('/categories','CategoryController');

	Route::resource('/brands','BrandController');

	Route::resource('/subcategories','SubcategoryController');

	Route::resource('/colors','ColorController');

	Route::resource('/packages','PackageController');

	Route::resource('/items','ItemController');

	Route::resource('/orders','OrderController');
});


Route::get('/','FrontendController@index')->name('dreamdecor');

Route::get('checkout','FrontendController@checkout')->name('checkout');

Route::get('profile','FrontendController@profile')->name('profile');

Route::get('item','FrontendController@item')->name('item');

Route::get('package','FrontendController@package')->name('package');

Route::get('packagedetail/{id}', 'FrontendController@packagedetail')->name('packagedetail');

Route::get('itemdetail/{id}', 'FrontendController@itemdetail')->name('itemdetail');

//search
Route::post('search','FrontendController@search')->name('searchkey');

//wishlist
// Route::get('addToWishList','FrontendController@wishlist')->name('addToWishList');

// Route::get('/WishList','FrontendController@View_wishList');

// Route::get('/removeWishList/{id}','FrontendController@removeWishList');





//user login
// Route::group(['middleware'=>'auth'], function() {
// 	Route::get('/order','OrderController');
// });


Auth::routes(['verify'=>true]);


//Excel
Route::get('users/export', 'UsersController@export')->name('excel');







Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');





Route::post('getitems','FrontendController@getItems')->name('getitems');

Route::post('getpackages','FrontendController@getpackages')->name('getpackages');