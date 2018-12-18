<?php

namespace App\Http\Controllers;

use Auth;
use App\Kategori;
use App\Models\Order;
use\App\Models\Cart;

class ControllerCart extends Controller
{
    //Menampilkan halaman cart
    public function index()
    {
      $user_id = Auth::user()->id;
    	$cart = Cart::orderBy('created_at', 'desc')->where('status', NULL)->where('users', $user_id)->first(); //active cart id
    	if ($cart){
                $detail = Order::where('cart_id', $cart->id)->get();
    			// $detail = Order::orderBy('created_at', 'desc')->where('cart_id', $cart->id)->get();
    	} else{
    		$detail = NULL;
    	}
        return view('user.cart', compact('detail'));
    }
}
