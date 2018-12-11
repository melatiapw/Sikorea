<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

class ControllerCheckout extends Controller
{
    //Menampilkan halaman checkout
    public function alamat()
    {
        return view('checkout_alamat');
    }
    public function bank()
    {
        return view('checkout_bank');
    }
    public function statustransaksi()
    {
        return view('statustransaksi');
    }
}
