<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "HomeController@index");

Route::get("login", "UserController@login");
Route::post("login", "UserController@doLogin");

Route::get("register", "UserController@register");
Route::post("register", "UserController@doRegister");

Route::get("movie/list", "MovieController@index");
Route::get("movie/{movie}", "MovieController@show");

Route::get("movie/create", "MovieController@create");
Route::post("movie", "MovieController@store");