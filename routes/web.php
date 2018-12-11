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
// User
Route::get('/', 'ControllerHome@index');
Route::get('/contact', 'ControllerContact@index');
Route::get('/order', 'ControllerOrder@index');
Route::get('/cart', 'ControllerCart@index');
Route::get('/checkout-alamat', 'ControllerCheckout@alamat');
Route::get('/checkout-bank', 'ControllerCheckout@bank');
Route::get('/statustransaksi', 'ControllerCheckout@statustransaksi');

//Admin
Route::get('/homeAdmin', 'ControllerAdmin@indexAdmin');
Route::get('/pesanan', 'ControllerAdmin@pesanan');
Route::get('/katalog', 'ControllerAdmin@katalog');
