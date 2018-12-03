<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

class ControllerAdmin extends Controller
{
    //Menampilkan halaman beranda
    public function indexAdmin()
    {
        return view('admin.homeAdmin');
    }
}
