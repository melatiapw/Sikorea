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

//route untuk home
Route::get('/', 'ControllerHome@index');
Route::get('/contact', 'ControllerContact@index');

//route untuk order
Route::resource('order', 'ControllerOrder');
Route::get('/order', 'ControllerOrder@index');

//route untuk cart
Route::get('/cart', 'ControllerCart@index');
Route::get('/order/{id}', 'ControllerOrder@destroy');

//route untuk checkout
Route::resource('checkout', 'ControllerCheckout');
Route::get('/checkout_alamat', 'ControllerCheckout@checkout_alamat');
Route::get('/checkout_bank', 'ControllerCheckout@checkout_bank');
Route::patch('checkout/{id}/update_cp',  ['as' => 'checkout.update_cp', 'uses' => 'ControllerCheckout@update_cp']);
Route::patch('checkout/{id}/update_bank',  ['as' => 'checkout.update_bank', 'uses' => 'ControllerCheckout@update_bank']);

//route mengambil data pilihan di pesanan
Route::get('bahan/get/{id}', 'Controller@getBahan');
Route::get('jenis_pakaian/get/{id}', 'ControllerOrder@getPakaian');
Route::get('jenis_ukuran/get/{id}', 'ControllerOrder@getUkuran');
Route::get('jumlah_bordir/get/{id}', 'ControllerOrder@getJumBordir');
// Route::get('jumlah_kaos/get/{id}', 'ControllerOrder@getJumKaos');
// Route::get('lengan/get/{id}', 'ControllerOrder@getLengan');
Route::get('lokasi_bordir/get/{id}', 'ControllerOrder@getLokBordir');
Route::get('lokasi_sablon/get/{id}', 'ControllerOrder@getLokSablon');
// Route::get('manset/get/{id}', 'ControllerOrder@getManset');
Route::get('model/get/{id}', 'ControllerOrder@getModel');
Route::get('sablon/get/{id}', 'ControllerOrder@getSablon');
Route::get('warna_bahan/get/{id}', 'ControllerOrder@getWarBahan');
Route::get('warna_sablon/get/{id}', 'ControllerOrder@getWarSablon');
