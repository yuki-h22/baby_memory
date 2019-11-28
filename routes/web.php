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
Route::get('baby', 'BabiesController@index');
// Route::resource('baby', 'BabiesController');
// Route::get('/baby','babiesController@index');
// Route::post('/baby','babiesController@store');
// Route::get('create_create', [
//   'babies' => 'BabyController@create'
// ]);
Route::get('/', 'BabiesController@index');
Route::get('baby/create', 'BabiesController@create');
Route::post('baby/create', 'BabiesController@create');

Route::get('baby/{id}', 'BabiesController@show');

Route::post('/image_confirm', 'BabiesController@postImageConfirm')->name("image_confirm");
Route::post('/image_complete', 'BabiesController@postImageComplete');

