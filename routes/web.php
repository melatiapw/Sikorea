<?php
use Spatie\Permission\Models\Role;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index'])->name('home');
Route::get('/contact', 'ControllerContact@index');


//Admin
Route::get('/pesanan', 'ControllerAdmin@pesanan');
Route::get('/katalog', 'ControllerAdmin@katalog');

Route::get('cart_terima/{id}', ['as' => 'cart_terima', 'uses' => 'ControllerAdmin@terima']);
Route::get('cart_tolak/{id}', ['as' => 'cart_tolak', 'uses' => 'ControllerAdmin@tolak']);
