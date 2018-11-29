<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

class ControllerCart extends Controller
{
    //Menampilkan halaman cart
    public function index()
    {
        return view('cart');
    }
}
