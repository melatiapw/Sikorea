<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

class ControllerCheckout extends Controller
{
    //Menampilkan halaman checkout
    public function index()
    {
        return view('checkout');
    }
}
