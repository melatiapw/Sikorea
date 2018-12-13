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
<<<<<<< HEAD
// User
=======

//route untuk home
>>>>>>> pipitbaru
Route::get('/', 'ControllerHome@index');
Route::get('/contact', 'ControllerContact@index');
Route::get('/order', 'ControllerOrder@index');
Route::get('/cart', 'ControllerCart@index');
Route::get('/checkout-alamat', 'ControllerCheckout@alamat');
Route::get('/checkout-bank', 'ControllerCheckout@bank');

<<<<<<< HEAD
//Admin
Route::get('/homeAdmin', 'ControllerAdmin@indexAdmin');
Route::get('/pesanan', 'ControllerAdmin@pesanan');
Route::get('/katalog', 'ControllerAdmin@katalog');
=======
//route untuk order
Route::get('/order', 'ControllerOrder@index');

//route untuk cart
Route::get('/cart', 'ControllerCart@index');

//route untuk checkout
Route::get('/checkout', 'ControllerCheckout@index');
>>>>>>> pipitbaru
