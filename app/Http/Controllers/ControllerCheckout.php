<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kategori;
use App\User;
use App\Models\Cart;
use App\Models\Order;
use Notification;
use App\Notifications\PesananBaru;
use App\Notifications\BuktiBayar;
use App\Notifications\StatusPesanan;

class ControllerCheckout extends Controller
{
  //Menampilkan halaman checkout
  public function checkout_alamat()
  {
      $cart = Cart::orderBy('created_at', 'desc')->where('status', NULL)->first(); //active cart id
      $detail = Order::where('cart_id', $cart->id)->get();
      $user = Auth::user()->name;
      return view('user.checkout_alamat', compact('cart', 'detail', 'user'));
  }
  public function checkout_bank()
  {
      $cart = Cart::orderBy('created_at', 'desc')->where('status', NULL)->first(); //active cart id
      $detail = Order::where('cart_id', $cart->id)->get();
      return view('user.checkout_bank', compact('cart', 'detail'));
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
      $cart->status = 2;
      $cart->total_harga = $request->total_harga;
      $cart->save();

      $Admin = User::whereHas('roles', function($q){
        $q->whereIn('name', ['Admin']);
        }
      )->get();
      Notification::send($Admin, new PesananBaru($cart));
      return redirect("/statustransaksi");
  }
  public function statustransaksi()
  {
    $user = Auth::user()->id;
    $cart = Cart::where("users", $user)->join('users', 'users.id', '=', 'cart.users')
                                      ->join('status', 'status.id', '=', 'cart.status')
                                      ->select('cart.*', 'users.name', 'status.subject')
                                      ->get();
    $order = DB::table('order')->join('jenis_pakaian', 'jenis_pakaian.id', '=', 'order.jenis_pakaian')
                              ->join('model', 'model.id', '=', 'order.model')
                              ->join('bahan', 'bahan.id', '=', 'order.bahan')
                              ->join('warna_bahan', 'warna_bahan.id', '=', 'order.warna_bahan')
                              ->join('manset', 'manset.id', '=', 'order.manset')
                              ->join('lengan', 'lengan.id', '=', 'order.lengan')
                              ->join('sablon', 'sablon.id', '=', 'order.sablon')
                              ->join('warna_sablon', 'warna_sablon.id', '=', 'order.warna_sablon')
                              ->join('lokasi_sablon', 'lokasi_sablon.id', '=', 'order.lokasi_sablon')
                              ->join('lokasi_bordir', 'lokasi_bordir.id', '=', 'order.lokasi_bordir')
                              ->join('jenis_ukuran', 'jenis_ukuran.id', '=', 'order.jenis_ukuran')
                              ->select('order.*', 'jenis_pakaian.nama_jenis_pakaian', 'model.nama_model',
                                        'bahan.nama_bahan', 'warna_bahan.nama_warna_bahan', 'manset.nama_manset', 'lengan.nama_lengan',
                                        'sablon.nama_sablon', 'warna_sablon.nama_warna_sablon',
                                        'lokasi_sablon.nama_lokasi_sablon', 'lokasi_bordir.nama_lokasi_bordir','jenis_ukuran.nama_jenis_ukuran')
                              ->get();

    return view('user.statustransaksi')->withKeranjang($cart)
                                      ->withPesanan($order);
  }
  public function upload(Request $request)
  {
      $this->validate($request, [
        'nota' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
      ]);
      $uploadedFile = $request->file('nota');
      $idcart = $request->idcart;
      $cart = Cart::find($idcart);
      $path = $uploadedFile->store('public/nota');
      $cart->nota = $path;
      $cart->save();
      $Admin = User::whereHas('roles', function($q){
        $q->whereIn('name', ['Admin']);
        }
      )->get();
      Notification::send($Admin, new BuktiBayar($cart));
      return redirect()
        ->back()
        ->with(['sukses' => 'Bukti Pembayaran has been uploaded']);
   }
}
