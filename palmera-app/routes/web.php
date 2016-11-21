<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('admin/login', function () {
    return view('admin.login');
});

Route::get('admin/register', function () {
    return view('admin.register');
});

Auth::routes();
Route::group(['prefix' => 'admin'], function () {
	Route::get('dashboard', 'admin\DashboardController@index');
	
	//Slider Mangement
	Route::resource('slider', 'admin\SliderController');
	Route::post('slider/change-status/{id}', 'admin\SliderController@status');

	//Category Mangement
	Route::resource('category', 'admin\CategoryController');
	Route::post('category/change-status/{id}', 'admin\CategoryController@status');

	//Category Mangement
	Route::resource('products', 'admin\ProductsController');
	Route::post('products/change-status/{id}', 'admin\ProductsController@status');

	Route::resource('personal', 'admin\PersonalController');
	Route::post('personal/change-status/{id}', 'admin\PersonalController@status');


});


