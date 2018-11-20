<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

class ControllerHome extends Controller
{
    //Menampilkan halaman beranda
    public function index()
    {
        return view('home');
    }
}
