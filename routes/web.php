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
// 指定の場合は下記記述
// Route::get('baby', 'BabyController@index');
Route::resource('baby', 'BabiesController');
// Route::get('/baby','babiesController@index');
// Route::post('/baby','babiesController@store');
// Route::get('create_create', [
//   'babies' => 'BabyController@create'
// ]);
Route::resource('user', 'UsersController');
Route::resource('content', 'ContentsController');
Route::get('/', 'BabiesController@index');
Route::get('baby/{id}', 'BabiesController@show');

Route::post('baby/image_confirm', 'BabiesController@postImageConfirm');
Route::post('baby/image_complete', 'BabiesController@postImageComplete');