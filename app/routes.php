<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//HOME VIEW
Route::get('/', array('as' => 'home', 'uses' => 'FrontController@index'))->before('auth');

//AUTH
Route::get('login', 'AuthController@loginDisplay')->before('guest');
Route::post('login', 'AuthController@loginProcess');
//logout
Route::get('logout', 'AuthController@logoutProcess')->before('auth');
//profile
Route::get('profile', 'AuthController@profileDisplay')->before('auth');
Route::post('profile', 'AuthController@profileProcess')->before('auth');



//tasks
Route::get('task/{id?}', 'TaskController@taskDisplay')->where('id','\d+');
Route::post('task/{id?}', 'TaskController@taskProcess');
Route::delete('task/{id}', 'TaskController@taskDelete')->where('id','\d+');