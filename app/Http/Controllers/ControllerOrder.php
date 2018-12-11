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
    	$mod = DB::table('model')->pluck("nama_model", 'id');
    	$bah = DB::table('bahan')->pluck("nama_bahan", 'id');
    	$pak = DB::table('jenis_pakaian')->pluck("nama_jenis_pakaian", 'id');
    	$uk = DB::table('jenis_ukuran')->pluck("nama_jenis_ukuran", 'id');
    	$jb = DB::table('jumlah_bordir')->pluck("nama_jumlah_bordir", 'id');
    	$sab = DB::table('sablon')->pluck("nama_sablon", 'id');
    	$wb = DB::table('warna_bahan')->pluck("nama_warna_bahan", 'id');
    	$ws = DB::table('warna_sablon')->pluck("nama_warna_sablon", 'id');

        return view('order', compact('pak', 'mod', 'bah', 'uk', 'jb', 'sab', 'wb', 'ws'));
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
    	

    	// $cartExist = Cart::find(1);

    	// if($cartExist==True){
    	// 	$order->cart_id = $cartExist->id;
    	// }else{
    		$cart = new Cart;
    		// $cart->users = Input::get('user_id');
    		$cart->save();

    		$order->cart_id = $cart->id;
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

    public function getModel($id)
    {
      $mod = DB::table('model')->pluck("nama_model", 'id');
      return json_encode($mod);
    }

    public function getBahan($id)
    {
      $bah = DB::table('bahan')->pluck("nama_bahan", 'id');
      return json_encode($bah);
    }

    public function getPakaian($id)
    {
      $pak = DB::table('jenis_pakaian')->pluck("nama_jenis_pakaian", 'id');
      return json_encode($pak);
    }

    public function getUkuran($id)
    {
      $uk = DB::table('jenis_ukuran')->pluck("nama_jenis_ukuran", 'id');
      return json_encode($uk);
    }

    public function getJumBor($id)
    {
      $jb = DB::table('jumlah_bordir')->pluck("nama_jumlah_bordir", 'id');
      return json_encode($jb);
    }

    public function getSablon($id)
    {
      $sab = DB::table('sablon')->pluck("nama_sablon", 'id');
      return json_encode($sab);
    }

    public function getWarBahan($id)
    {
      $wb = DB::table('warna_bahan')->pluck("nama_warna_bahan", 'id');
      return json_encode($wb);
    }

    public function getWarSablon($id)
    {
      $ws = DB::table('warna_sablon')->pluck("nama_warna_sablon", 'id');
      return json_encode($ws);
    }






}
