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

Route::get('/', function () {
   // phpinfo();
    return view('welcome');
});
Route::get('/php', function () {
     phpinfo();
});
Route::get("Token","Api\TestController@index");
Route::get("Token1","Api\TestController@token");
Route::get("Token2","Api\TestController@token1");


