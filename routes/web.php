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
    view('logins.login');
});
Route::post('login',function(){
    view('logins.login');
});

Route::get('shalet','App\Http\Controllers\SharetController@index')->middleware(AuthMiddleware::class);
Route::post('shalet','App\Http\Controllers\SharetController@index')->middleware(AuthMiddleware::class);

Route::get('hello','App\Http\Controllers\HelloController@index');
Route::post('hello','App\Http\Controllers\HelloController@post');

Route::get('tweet', 'App\Http\Controllers\TweetController@model');

Route::get('hello/add','App\Http\Controllers\HelloController@add');
Route::post('hello/add','App\Http\Controllers\HelloController@create');