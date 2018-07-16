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

Route::get('/', 'FrontendController@index');

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::resource('blocks', 'BlockController');
Route::get('/blocks/show_texts/{id}', 'BTextController@show_texts')->name('show_texts');
Route::get('/btexts/add_text/{id}', 'BTextController@create')->name('add_text');
Route::post('/btexts/store_text/{id}', 'BTextController@store')->name('store_text');
Route::post('/btexts/delete_text/{id}/{block_id}', 'BTextController@destroy')->name('delete_text');
Route::get('/btexts/edit_text/{id}/{block_id}', 'BTextController@edit')->name('edit_text');
Route::post('/btexts/update_text/{id}/{block_id}', 'BTextController@update')->name('update_text');

Route::resource('bTexts', 'BTextController');