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



/*====================================
=            Static pages            =
====================================*/
Route::get('policy','PageController@policy');
Route::get('about','PageController@about');
Route::get('contact','PageController@contact');
Route::get('app','PageController@app');
/*=====  End of Static pages  ======*/

Route::get('home','HomeController@home');
Route::get('category','CategoryController@cat');
Route::get('checkout','CheckoutController@check');


/*=============================================
=            Product Route            =
=============================================*/
Route::get('admin/product/create','ProductController@create');
Route::post('admin/product/create','ProductController@store');
Route::get('admin/product/show/{product_id}','ProductController@show');
/*Route::get('/admin/product/show','ProductController@display');
*//*=====  End of Product Route  ======*/

/*=============================================
=            Category Route           =
=============================================*/
Route::get('admin/category/create','CategoryController@create');
Route::post('admin/category/create','CategoryController@store');
Route::get('admin/category/index','CategoryController@index');
Route::get('admin/category/show/{category_id}','CategoryController@show');

/*=====  End of Category Route  ======*/



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

//Route::group(['middleware' => ['web']], function () {
    //
//});
