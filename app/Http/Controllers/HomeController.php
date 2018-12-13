<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use\App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       if (Auth::user()->hasRole('admin')) {
         $cart = DB::table('cart')->get();
         $order = DB::table('order')->get();
         return view('admin.requestPage')->withKeranjang($cart)->withPesanan($order);
       }
       elseif (Auth::user()->hasRole('user')) {
         // code...
         return view('home');
       }
       else {
         Auth::user()->assignRole('user');
         return view('home');
       }

     }


}
