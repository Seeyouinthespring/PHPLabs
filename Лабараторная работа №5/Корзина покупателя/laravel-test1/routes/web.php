<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductController@index');
Route::post('/create', 'ProductController@store');
Route::get('/create','ProductController@create');
Route::delete('/delete/product/{id}','ProductController@destroy');

Route::get('/bucket', 'BucketController@showBucket');
Route::post('/productintobucket/{id}', 'BucketController@addIntoBucket');
Route::post('/dropbucket', 'BucketController@dropBucket');
