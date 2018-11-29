<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

class ControllerContact extends Controller
{
    //Menampilkan halaman contact
    public function index()
    {
        return view('contact');
    }
}
