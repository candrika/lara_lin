<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Redis;

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

//default route laravel
// Route::get('/', function () {
// 	// $p=Redis::incr('p');
//     return view('welcome');
// });

//load dashboard
Route::get('/','App\Http\Controllers\HomeController@index');

//load saldo info
Route::get('/saldo/historis','App\Http\Controllers\HomeController@saldo');

//load halaman pemasukan
Route::get('/income/page','App\Http\Controllers\IncomeController@index');
//get form input
Route::get('/income/form/input','App\Http\Controllers\IncomeController@input');
//get form edit
Route::get('/income/form/edit/{id}','App\Http\Controllers\IncomeController@edit');
//post method to save data
Route::post('/income/add','App\Http\Controllers\IncomeController@add');
//put method to update data
Route::post('/income/update','App\Http\Controllers\IncomeController@update');
//delete data
Route::get('/income/delete/{id}','App\Http\Controllers\IncomeController@delete');

//load halaman pengluaran
Route::get('/outcome/page','App\Http\Controllers\OutcomeController@index');
//get form input
Route::get('/outcome/form/input','App\Http\Controllers\OutcomeController@input');
//get form edit
Route::get('/outcome/form/edit/{id}','App\Http\Controllers\OutcomeController@edit');
//post method to save data
Route::post('/outcome/add','App\Http\Controllers\OutcomeController@add');
//put method to update data
Route::post('/outcome/update','App\Http\Controllers\OutcomeController@update');
//delete data
Route::get('/outcome/delete/{id}','App\Http\Controllers\OutcomeController@delete');

//load halaman transaksi
Route::get('/trx/page','App\Http\Controllers\TranscationController@index');
//get form input
Route::get('/trx/form/input','App\Http\Controllers\TranscationController@input');
//get form edit
Route::get('/trx/form/edit/{id}','App\Http\Controllers\TranscationController@edit');
//post method to save data
Route::post('/trx/add','App\Http\Controllers\TranscationController@add');
//put method to update data
Route::post('/trx/update','App\Http\Controllers\TranscationController@update');
//delete data
Route::get('/trx/delete/{id}','App\Http\Controllers\TranscationController@delete');