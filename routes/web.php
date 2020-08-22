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
});



//user login
Route::group(['middleware'=>'auth'], function() {
	Route::get('/order','OrderController@index');
});





//Excel
Route::get('users/export', 'UsersController@export');





Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
