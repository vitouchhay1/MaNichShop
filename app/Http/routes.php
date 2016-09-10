<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/  

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () { 
Route::get('/', function () {return view('home');}); 
Route::get('admin', 'AdminController@index'); 
/*Product Route*/ 
Route::get('product', 'ProductController@index');
Route::get('addproduct', 'ProductController@create');
Route::post('productstore', 'ProductController@store'); 
Route::post('proupdate/{id}', 'ProductController@update');
Route::get('proedit/{id}', 'ProductController@edit'); 
Route::get('prodelete/{id}', 'ProductController@destroy');
/*End Product Route*/
/*Category Route*/
Route::get('category','CategoryController@home');
Route::get('catadd','CategoryController@create');
Route::post('getChild','CategoryController@getChild');
Route::post('catstore','CategoryController@store');
Route::get('catedit/{id}','CategoryController@edit');
Route::post('catupdate/{id}','CategoryController@update');
Route::get('catdelete/{id}','CategoryController@destroy');
// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
//Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
});
	