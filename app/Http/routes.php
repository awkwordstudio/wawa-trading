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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','PageController@home');
Route::get('/category','PageController@category');
Route::get('/bag','PageController@bag');
Route::get('/glasses','PageController@glasses');
Route::get('/shirt','PageController@shirt');
Route::get('/shoe','PageController@shoe');
Route::get('/watch','PageController@watch');
Route::get('/aboutus','PageController@aboutus');

Route::get('/product/create','ProductController@create');
Route::post('/product/create','ProductController@store');

Route::get('/product/show/{id}','ProductController@show');
Route::get('/product/index','ProductController@index');

Route::get('glasses/edit/{id}','PageController@edit');
Route::patch('glasses/edit/{id}','PageController@update');

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
