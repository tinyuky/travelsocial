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
    return view('welcome');
});
Route::get('login',function(){
  return view('travel.pages.login');
});
Route::get('login2',function(){
  return view('travel.pages.login2');
});
Route::get('login3',function(){
  return view('travel.pages.login3');
});
