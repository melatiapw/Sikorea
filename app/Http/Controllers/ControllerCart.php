<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;

use App\Order;
use App\Cart;

class ControllerCart extends Controller
{
    //Menampilkan halaman cart
    public function index()
    {
    	$cart = Cart::orderBy('created_at', 'desc')->first(); //active cart id
    	$detail = Order::where('cart_id', $cart->id)->get();
        return view('cart', compact('detail'));
    }
}
