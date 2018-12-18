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

//route update status ADMIN
Route::get('updateStatus/{id}',['as' =>'updateStatus', 'uses'=> 'ControllerAdmin@updateStatus']);
Route::post('updateStatus/{id}',['as' =>'updateStatus', 'uses'=> 'ControllerAdmin@updateStatus']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//route untuk checkout
Route::resource('checkout', 'ControllerCheckout');
Route::get('/checkout_alamat', 'ControllerCheckout@checkout_alamat');
Route::get('/checkout_bank', 'ControllerCheckout@checkout_bank');
Route::patch('checkout/{id}/update_cp',  ['as' => 'checkout.update_cp', 'uses' => 'ControllerCheckout@update_cp']);
Route::patch('checkout/{id}/update_bank',  ['as' => 'checkout.update_bank', 'uses' => 'ControllerCheckout@update_bank']);

//Route: lihat status transaksi USER
Route::get('/statustransaksi', 'ControllerCheckout@statustransaksi');
//Route: for image upload view
Route::resource('buktipembayaran', 'ControllerCheckout');
Route::post('statustransaksi/upload', 'ControllerCheckout@upload')->name('file.upload');
// Route::get('/uploadgambar/{file}', function ($file)
// {
//     $path = storage_path() . '/avatars/' . $file;
//
//     if(!File::exists($path)) abort(404);
//
//     $file = File::get($path);
//     $type = File::mimeType($path);
//
//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);
//     return $response;
// })->name('file');
