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

Route::get('/jhdb', function () {
    return view('welcome');
});
Route::resource('/','LoginController');
Route::post('Login','LoginController@Login');

Route::resource('admin','AdminController');
Route::resource('stock','StockController');
Route::get('getStockDetail','StockController@getStockDetail');
Route::post('editStock','StockController@editStock')->name('editStock');
Route::get('propertyDetail/{id}','PropertyController@index');
Route::post('storeProperty','PropertyController@store')->name('storeProperty');
Route::resource('workers','UserController');
Route::post('editUser','UserController@editUser')->name('editUser');
Route::get('getUserDetail','UserController@getUserDetail');
Route::post('deleteUser/{id}','UserController@deleteUser');
Route::post('counterStore','PropertyController@counterStore')->name('counterStore');
Route::post('deleteCounter/{id}','PropertyController@deleteCounter');
Route::get('getCounterDetail','PropertyController@getCounterDetail');
Route::post('editCounter','PropertyController@edit');
Route::get('counterDetail/{id}','PropertyController@counterDetail');
Route::post('assignStock','StockController@assignStock');
Route::get('getStock','StockController@getStock');
Route::resource('sales','SalesController');
Route::get('getSales','SalesController@getSales');
Route::resource('counter','CounterController');
Route::post('closingStock','StockController@closingStock');
Route::get('getProdDetails','StockController@getProdDetails');
Route::resource('profile','ProfileController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
