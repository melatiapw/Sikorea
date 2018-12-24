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
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index'])->name('home');

//Kontak
Route::get('/contact', 'ControllerContact@index');

//Order Pesanan
Route::resource('order', 'ControllerOrder');

//Cart
Route::get('/cart', 'ControllerCart@index');
Route::get('/order/{id}', 'ControllerOrder@destroy');

//Checkout
Route::resource('checkout', 'ControllerCheckout');
Route::get('/checkout_alamat', 'ControllerCheckout@checkout_alamat');
Route::get('/checkout_bank', 'ControllerCheckout@checkout_bank');
Route::patch('checkout/{id}/update_cp',  ['as' => 'checkout.update_cp', 'uses' => 'ControllerCheckout@update_cp']);
Route::patch('checkout/{id}/update_bank',  ['as' => 'checkout.update_bank', 'uses' => 'ControllerCheckout@update_bank']);

//Status Transaksi
Route::get('/statustransaksi', 'ControllerCheckout@statustransaksi');

//Unggah Bukti Pembayaran
Route::post('statustransaksi/upload', 'ControllerCheckout@upload')->name('nota.upload');


//Pesanan
Route::get('bahan/get/{id}', 'Controller@getBahan');
Route::get('jenis_pakaian/get/{id}', 'ControllerOrder@getPakaian');
Route::get('jenis_ukuran/get/{id}', 'ControllerOrder@getUkuran');
Route::get('jumlah_bordir/get/{id}', 'ControllerOrder@getJumBordir');
Route::get('lokasi_bordir/get/{id}', 'ControllerOrder@getLokBordir');
Route::get('lokasi_sablon/get/{id}', 'ControllerOrder@getLokSablon');
Route::get('model/get/{id}', 'ControllerOrder@getModel');
Route::get('sablon/get/{id}', 'ControllerOrder@getSablon');
Route::get('warna_bahan/get/{id}', 'ControllerOrder@getWarBahan');
Route::get('warna_sablon/get/{id}', 'ControllerOrder@getWarSablon');

//Status Pesanan
Auth::routes();
Route::get('/pesanan', 'ControllerAdmin@pesanan');
Route::get('cart_terima/{id}', ['as' => 'cart_terima', 'uses' => 'ControllerAdmin@terima']);
Route::get('cart_tolak/{id}', ['as' => 'cart_tolak', 'uses' => 'ControllerAdmin@tolak']);
Route::get('updateStatus/{id}',['as' =>'updateStatus', 'uses'=> 'ControllerAdmin@updateStatus']);
Route::post('updateStatus/{id}',['as' =>'updateStatus', 'uses'=> 'ControllerAdmin@updateStatus']);

//Katalog
Route::get('/katalog', 'ControllerCatalog@index')->name('katalog');
Route::post('/katalog/storeJP',  ['as' => 'jenis_pakaian.store', 'uses' => 'ControllerCatalog@jenis_pakaian_store']);
Route::post('/katalog/storeMO',  ['as' => 'Model.store', 'uses' => 'ControllerCatalog@model_store']);
Route::post('/katalog/storeBA',  ['as' => 'Bahan.store', 'uses' => 'ControllerCatalog@bahan_store']);
Route::post('/katalog/storeWBA',  ['as' => 'WarnaBahan.store', 'uses' => 'ControllerCatalog@warna_bahan_store']);
Route::post('/katalog/storeMA',  ['as' => 'Manset.store', 'uses' => 'ControllerCatalog@manset_store']);
Route::post('/katalog/storeSA',  ['as' => 'Sablon.store', 'uses' => 'ControllerCatalog@sablon_store']);
Route::post('/katalog/storeWSA',  ['as' => 'WarnaSablon.store', 'uses' => 'ControllerCatalog@warna_sablon_store']);
Route::post('/katalog/storeLSA',  ['as' => 'LokasiSablon.store', 'uses' => 'ControllerCatalog@lokasi_sablon_store']);
Route::post('/katalog/storeJBOR',  ['as' => 'JumlahBordir.store', 'uses' => 'ControllerCatalog@jumlah_bordir_store']);
Route::post('/katalog/storeLBOR',  ['as' => 'LokasiBordir.store', 'uses' => 'ControllerCatalog@lokasi_bordir_store']);
Route::post('/katalog/storeJU',  ['as' => 'JenisUkuran.store', 'uses' => 'ControllerCatalog@jenis_ukuran_store']);
Route::post('/katalog/storeJK',  ['as' => 'JumlahKaos.store', 'uses' => 'ControllerCatalog@jumlah_kaos_store']);
Route::post('/katalog/storeLE',  ['as' => 'Lengan.store', 'uses' => 'ControllerCatalog@lengan_store']);


Route::get('deleteJP/{id}','ControllerCatalog@jenis_pakaian_destroy');
Route::get('deleteMO/{id}','ControllerCatalog@model_destroy');
Route::get('deleteBA/{id}','ControllerCatalog@bahan_destroy');
Route::get('deleteWBA/{id}','ControllerCatalog@warna_bahan_destroy');
Route::get('deleteMA/{id}','ControllerCatalog@manset_destroy');
Route::get('deleteSA/{id}','ControllerCatalog@sablon_destroy');
Route::get('deleteWSA/{id}','ControllerCatalog@warna_sablon_destroy');
Route::get('deleteLSA/{id}','ControllerCatalog@lokasi_sablon_destroy');
Route::get('deleteJBOR/{id}','ControllerCatalog@jumlah_bordir_destroy');
Route::get('deleteLBOR/{id}','ControllerCatalog@lokasi_bordir_destroy');
Route::get('deleteJU/{id}','ControllerCatalog@jenis_ukuran_destroy');
Route::get('deleteJK/{id}','ControllerCatalog@jumlah_kaos_destroy');
Route::get('deleteLE/{id}','ControllerCatalog@lengan_destroy');


Route::get('jenis_pakaian_edit/{id}', ['as' => 'jenis_pakaian_edit', 'uses' => 'ControllerCatalog@jenis_pakaian_edit']);
Route::post('jenis_pakaian/{id}', ['as' => 'jenis_pakaian.update', 'uses' => 'ControllerCatalog@jenis_pakaian_update']);

Route::get('model_edit/{id}', ['as' => 'model_edit', 'uses' => 'ControllerCatalog@model_edit']);
Route::post('model/{id}', ['as' => 'model.update', 'uses' => 'ControllerCatalog@model_update']);

Route::get('bahan_edit/{id}', ['as' => 'bahan_edit', 'uses' => 'ControllerCatalog@bahan_edit']);
Route::post('bahan/{id}', ['as' => 'bahan.update', 'uses' => 'ControllerCatalog@bahan_update']);

Route::get('warna_bahan_edit/{id}', ['as' => 'warna_bahan_edit', 'uses' => 'ControllerCatalog@warna_bahan_edit']);
Route::post('warna_bahan/{id}', ['as' => 'warna_bahan.update', 'uses' => 'ControllerCatalog@warna_bahan_update']);

Route::get('manset_edit/{id}', ['as' => 'manset_edit', 'uses' => 'ControllerCatalog@manset_edit']);
Route::post('manset/{id}', ['as' => 'manset.update', 'uses' => 'ControllerCatalog@manset_update']);

Route::get('sablon_edit/{id}', ['as' => 'sablon_edit', 'uses' => 'ControllerCatalog@sablon_edit']);
Route::post('sablon/{id}', ['as' => 'sablon.update', 'uses' => 'ControllerCatalog@sablon_update']);

Route::get('warna_sablon_edit/{id}', ['as' => 'warna_sablon_edit', 'uses' => 'ControllerCatalog@warna_sablon_edit']);
Route::post('warna_sablon/{id}', ['as' => 'warna_sablon.update', 'uses' => 'ControllerCatalog@warna_sablon_update']);

Route::get('lokasi_sablon_edit/{id}', ['as' => 'lokasi_sablon_edit', 'uses' => 'ControllerCatalog@lokasi_sablon_edit']);
Route::post('lokasi_sablon/{id}', ['as' => 'lokasi_sablon.update', 'uses' => 'ControllerCatalog@lokasi_sablon_update']);

Route::get('jumlah_bordir_edit/{id}', ['as' => 'jumlah_bordir_edit', 'uses' => 'ControllerCatalog@jumlah_bordir_edit']);
Route::post('jumlah_bordir/{id}', ['as' => 'jumlah_bordir.update', 'uses' => 'ControllerCatalog@jumlah_bordir_update']);

Route::get('lokasi_bordir_edit/{id}', ['as' => 'lokasi_bordir_edit', 'uses' => 'ControllerCatalog@lokasi_bordir_edit']);
Route::post('lokasi_bordir/{id}', ['as' => 'lokasi_bordir.update', 'uses' => 'ControllerCatalog@lokasi_bordir_update']);

Route::get('jenis_ukuran_edit/{id}', ['as' => 'jenis_ukuran_edit', 'uses' => 'ControllerCatalog@jenis_ukuran_edit']);
Route::post('jenis_ukuran/{id}', ['as' => 'jenis_ukuran.update', 'uses' => 'ControllerCatalog@jenis_ukuran_update']);

Route::get('jumlah_kaos_edit/{id}', ['as' => 'jumlah_kaos_edit', 'uses' => 'ControllerCatalog@jumlah_kaos_edit']);
Route::post('jumlah_kaos/{id}', ['as' => 'jumlah_kaos.update', 'uses' => 'ControllerCatalog@jumlah_kaos_update']);

Route::get('lengan_edit/{id}', ['as' => 'lengan_edit', 'uses' => 'ControllerCatalog@lengan_edit']);
Route::post('lengan/{id}', ['as' => 'lengan.update', 'uses' => 'ControllerCatalog@lengan_update']);

//Notifikasi
Route::get('/notifications/{id}','ControllerNotifikasi@NotifMarkAsRead')->name('Notifikasi');
