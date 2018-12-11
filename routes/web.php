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
Route::get('/admin', 'ControllerAdmin@indexAdmin')->middleware('role:admin');
Auth::routes();
// Route::get('/admin', 'AdminController@admin')
//     ->middleware('is_admin')
//     ->name('admin');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/homeAdmin', 'ControllerAdmin@indexAdmin');
// Route::get('/', 'ControllerHome@index');
Route::get('/contact', 'ControllerContact@index');
