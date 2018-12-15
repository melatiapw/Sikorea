<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Order;
use App\Cart;



class ControllerOrder extends Controller
{
    //Menampilkan halaman form pembelian
    public function index()
    {
    	$mod = DB::table('model')->get();
    	$bah = DB::table('bahan')->get();
    	$pak = DB::table('jenis_pakaian')->select('id', 'nama_jenis_pakaian', 'harga')->get();
    	$uk = DB::table('jenis_ukuran')->get();
    	$lb = DB::table('lokasi_bordir')->get();
        $ls = DB::table('lokasi_sablon')->get();
    	$sab = DB::table('sablon')->get();
    	$wb = DB::table('warna_bahan')->get();
    	$ws = DB::table('warna_sablon')->get();
        $len = DB::table('lengan')->get();
        $man = DB::table('manset')->get();

        return view('order', compact('pak', 'mod', 'bah', 'uk', 'lb', 'sab', 'wb', 'ws', 'ls', 'len', 'man'));
    }

    public function store(Request $request)
    {
    	$order = new Order;
    	$order->jenis_pakaian = $request->jenis_pakaian;
    	$order->model = $request->model;
    	$order->bahan = $request->bahan;
    	$order->warna_bahan = $request->warna_bahan;
    	$order->pilihan_warna_bahan = $request->pilihan_warna_bahan;
    	$order->manset = $request->manset;
    	$order->lengan = $request->lengan;
    	$order->sablon = $request->sablon;
    	$order->warna_sablon = $request->warna_sablon;
    	$order->pilihan_warna_sablon = $request->pilihan_warna_sablon;
    	$order->lokasi_sablon = $request->lokasi_sablon;
    	$order->jumlah_bordir = $request->jumlah_bordir;
    	$order->lokasi_bordir = $request->lokasi_bordir;
    	$order->jumlah_produk = $request->jumlah_produk;
    	$order->jenis_ukuran = $request->jenis_ukuran;
    	

    	$cartExist = Cart::orderBy('created_at', 'desc')->first();


    	if($cartExist){
    		$order->cart_id = $cartExist->id;
    	}else{
    		$cart = new Cart;
    		// $cart->users = Input::get('user_id');
            $cart->save();
            $order->cart_id = $cart->id;
        }
    		


    	// }

    	$order->save();


    	return redirect('/cart');
    }

    public function show($id)
    {
        // get the nerd
        $order = Order::find($id);

        // show the view and pass the nerd to it
        return View::make('order.show')
            ->with('order', $order);
    }



}
