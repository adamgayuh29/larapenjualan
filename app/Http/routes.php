<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/barang', 'BarangController@index')->name('barang.index');
Route::get('/barang/create', 'BarangController@create')->name('barang.create');
Route::post('/barang/create','BarangController@store');
Route::get('/barang/{barang}/edit', 'BarangController@edit')->name('barang.edit');
Route::patch('/barang/{barang}/edit', 'BarangController@update')->name('barang.update');
Route::delete('/barang/{barang}/delete', 'BarangController@destroy')->name('barang.destroy');


Route::get('/customer', 'CustomerController@index')->name('customer.index');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/create','CustomerController@store');
Route::get('/cust``omer/{customer}/edit', 'CustomerController@edit')->name('customer.edit');
Route::patch('/customer/{customer}/edit', 'CustomerController@update')->name('customer.update');
Route::delete('/customer/{customer}/delete', 'CustomerController@destroy')->name('customer.destroy');

Route::get('/penjualan', 'PenjualanController@index')->name('penjualan.index');
Route::get('/penjualan/create', 'PenjualanController@create')->name('penjualan.create');
Route::post('/penjualan/create','PenjualanController@store');
Route::get('/cust``omer/{penjualan}/edit', 'PenjualanController@edit')->name('penjualan.edit');
Route::patch('/penjualan/{penjualan}/edit', 'PenjualanController@update')->name('penjualan.update');
Route::delete('/penjualan/{penjualan}/delete', 'PenjualanController@destroy')->name('penjualan.destroy');


Route::get('/detailpenjualan', 'DetailpenjualanController@index')->name('detailpenjualan.index');
Route::get('/detailpenjualan/create', 'DetailpenjualanController@create')->name('detailpenjualan.create');
Route::post('/detailpenjualan/create','DetailpenjualanController@store');
Route::get('/cust``omer/{detailpenjualan}/edit', 'DetailpenjualanController@edit')->name('detailpenjualan.edit');
Route::patch('/detailpenjualan/{detailpenjualan}/edit', 'DetailpenjualanController@update')->name('detailpenjualan.update');
Route::delete('/detailpenjualan/{detailpenjualan}/delete', 'DetailpenjualanController@destroy')->name('detailpenjualan.destroy');
Route::get('/detailpenjualan/{detailpenjualan}/json','DetailpenjualanController@json')->name('detailpenjualan.json');
Route::get('/cari', 'DetailpenjualanController@loadData');
Route::get('query', 'DetailpenjualanController@loadData');