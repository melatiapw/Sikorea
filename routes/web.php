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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
   return view('admin.homeAdmin');
});


Route::get('/katalog', 'ControllerCatalog@index')->name('katalog');
Route::post('/katalog/storeJP',  ['as' => 'jenis_pakaian.store', 'uses' => 'ControllerCatalog@jenis_pakaian_store']);
Route::post('/katalog/storeMO',  ['as' => 'Model.store', 'uses' => 'ControllerCatalog@model_store']);
Route::post('/katalog/storeBA',  ['as' => 'Bahan.store', 'uses' => 'ControllerCatalog@bahan_store']);
Route::post('/katalog/storeWBA',  ['as' => 'WarnaBahan.store', 'uses' => 'ControllerCatalog@warna_bahan_store']);
Route::post('/katalog/storeMA',  ['as' => 'Manset.store', 'uses' => 'ControllerCatalog@manset_store']);
Route::post('/katalog/storeSA',  ['as' => 'Sablon.store', 'uses' => 'ControllerCatalog@sablon_store']);
Route::post('/katalog/storeWSA',  ['as' => 'WarnaSablon.store', 'uses' => 'ControllerCatalog@warna_sablon_store']);
Route::post('/katalog/storeLSA',  ['as' => 'LokasiSablon.store', 'uses' => 'ControllerCatalog@lokasi_sablon_store']);
Route::post('/katalog/storeBOR',  ['as' => 'Bordir.store', 'uses' => 'ControllerCatalog@bordir_store']);
Route::post('/katalog/storeLBOR',  ['as' => 'LokasiBordir.store', 'uses' => 'ControllerCatalog@lokasi_bordir_store']);
Route::post('/katalog/storeJU',  ['as' => 'JenisUkuran.store', 'uses' => 'ControllerCatalog@jenis_ukuran_store']);
Route::post('/katalog/storeJK',  ['as' => 'JumlahKaos.store', 'uses' => 'ControllerCatalog@jumlah_kaos_store']);


Route::get('deleteJP/{id}','ControllerCatalog@jenis_pakaian_destroy');
Route::get('deleteMO/{id}','ControllerCatalog@model_destroy');
Route::get('deleteBA/{id}','ControllerCatalog@bahan_destroy');
Route::get('deleteWBA/{id}','ControllerCatalog@warna_bahan_destroy');
Route::get('deleteMA/{id}','ControllerCatalog@manset_destroy');
Route::get('deleteSA/{id}','ControllerCatalog@sablon_destroy');
Route::get('deleteWSA/{id}','ControllerCatalog@warna_sablon_destroy');
Route::get('deleteLSA/{id}','ControllerCatalog@lokasi_sablon_destroy');
Route::get('deleteBOR/{id}','ControllerCatalog@bordir_destroy');
Route::get('deleteLBOR/{id}','ControllerCatalog@lokasi_bordir_destroy');
Route::get('deleteJU/{id}','ControllerCatalog@jenis_ukuran_destroy');
Route::get('deleteJK/{id}','ControllerCatalog@jumlah_kaos_destroy');


Route::get('jenisPakaian_edit/{id}', ['as' => 'jenis_pakaian.edit', 'uses' => 'ControllerCatalog@jenis_pakaian_edit']);
Route::post('updateJP/{id}', ['as' => 'jenis_pakaian.update', 'uses' => 'ControllerCatalog@jenis_pakaian_update']);
