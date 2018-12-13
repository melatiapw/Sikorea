<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

class ControllerOrder extends Controller
{
    //Menampilkan halaman form pembelian
    public function index()
    {
        return view('order');
    }
}
