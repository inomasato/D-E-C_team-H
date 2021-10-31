<?php

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\HelloMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt;

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

Route::get('/',function(){

    return view('welcome');

});

Route::get('login',function(){
  return view('logins.login');
});

Route::post('login','App\Http\Controllers\AuthController@login');

Route::get('sharet','App\Http\Controllers\SharetController@index');
Route::post('sharet','App\Http\Controllers\SharetController@index');

Route::get('sharet/addReply','App\Http\Controllers\SharetController@addReply');
Route::post('sharet/addReply','App\Http\Controllers\SharetController@addReply');

Route::get('sharet/reply','App\Http\Controllers\SharetController@reply');
Route::post('sharet/reply','App\Http\Controllers\SharetController@reply');

Route::get('hello','App\Http\Controllers\HelloController@index');
Route::post('hello','App\Http\Controllers\HelloController@post');

Route::get('tweet', 'App\Http\Controllers\TweetController@model');

Route::get('hello/add','App\Http\Controllers\HelloController@add');
Route::post('hello/add','App\Http\Controllers\HelloController@create');

Route::get('follower', 'App\Http\Controllers\FollowerController@index');

Route::get('mypage', 'App\Http\Controllers\MypageController@index');
Route::post('mypage','App\Http\Controllers\MypageController@index');

Route::get('create', 'App\Http\Controllers\CreateController@index');
Route::post('create','App\Http\Controllers\CreateController@create');

Route::get('update', 'App\Http\Controllers\CreateController@edit');
Route::post('update','App\Http\Controllers\CreateController@update');