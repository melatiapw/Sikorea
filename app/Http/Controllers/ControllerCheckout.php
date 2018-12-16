<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Kategori;

use App\Cart;
use App\Order;

class ControllerCheckout extends Controller
{
    //Menampilkan halaman checkout
    public function checkout_alamat()
    {
        $cart = Cart::orderBy('created_at', 'desc')->where('status', NULL)->first(); //active cart id
    	$detail = Order::where('cart_id', $cart->id)->get();
        return view('checkout_alamat', compact('cart', 'detail'));
    }

    public function checkout_bank()
    {
        $cart = Cart::orderBy('created_at', 'desc')->where('status', NULL)->first(); //active cart id
    	$detail = Order::where('cart_id', $cart->id)->get();
        return view('checkout_bank', compact('cart', 'detail'));
    }

    public function update_cp(Request $request, $id)
    {

      	$cart = Cart::find($id);
      	$cart->alamat_cp = $request->alamat_cp;
    	$cart->no_cp = $request->no_cp;
    	$cart->save();
      	return redirect("/checkout_bank");
    }

    public function update_bank(Request $request, $id)
    {
    	$cart = Cart::find($id);
      	$cart->status = 1;
    	// $cart->bank = $request->bank;
    	$cart->save();
      	return redirect("/cart");
    }

}
