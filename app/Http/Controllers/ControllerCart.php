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
    	$cart = Cart::orderBy('created_at', 'desc')->where('status', NULL)->first(); //active cart id
    	if ($cart){
                $detail = Order::where('cart_id', $cart->id)->get();
    			// $detail = Order::orderBy('created_at', 'desc')->where('cart_id', $cart->id)->get();	
    	} else{
    		$detail = NULL;
    	}
        return view('cart', compact('detail'));
    }
}
