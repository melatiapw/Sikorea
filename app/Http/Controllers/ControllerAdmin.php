<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

class ControllerAdmin extends Controller
{
    //Menampilkan halaman beranda/request
    public function indexAdmin()
    {
        return view('admin.requestPage');
    }
    //Menampilkan halaman pesanan
    public function pesanan()
    {
        return view('admin.pesanan');
    }
    public function katalog()
    {
        return view('admin.katalog');
    }
}
