<?php
namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use\App\Models\Cart;
use App\Kategori;
use Notification;
use App\Notifications\PesananBaru;
use App\Notifications\StatusPesanan;

class ControllerAdmin extends Controller
{
  public function pesanan()
  {
    $cart = DB::table('cart')->join('users', 'users.id', '=', 'cart.users')
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

    return view('admin.pesanan')->withKeranjang($cart)
                              ->withPesanan($order);
  }
    public function terima($id)
    {
      $Pengguna = Auth::user();
      $cart = Cart::find($id);

      $cart->update(['status' => 3]);
      $cart->save();
      if ($Pengguna->hasRole('admin')) {
        $IDPembeli = $cart->users;
        $Pembeli = User::where('id', '=', $IDPembeli)->first();
        Notification::send($Pembeli, new StatusPesanan($cart));
      }
      return redirect()->back();
    }
    public function tolak($id)
    {
      $Pengguna = Auth::user();
      $cart = Cart::find($id);
      Cart::find($id)->update(['status' => 1]);
      $cart->save();
      if ($Pengguna->hasRole('admin')) {
        $IDPembeli = $cart->users;
        $Pembeli = User::where('id', '=', $IDPembeli)->first();
        Notification::send($Pembeli, new StatusPesanan($cart));
      }
      return redirect()->back();
    }
    public function updateStatus($id, Request $request)
    {
      $Pengguna = Auth::user();
      $Cart = Cart::find($id);
      $Cart->status = $request->status;
    	$Cart->save();
      //Mengirim Notifikasi Perubahan Status Pesanan
      if ($Pengguna->hasRole('admin')) {
        $IDPembeli = $Cart->users;
        $Pembeli = User::where('id', '=', $IDPembeli)->first();
        Notification::send($Pembeli, new StatusPesanan($Cart));
      }
      return redirect()->back()->with('Success', 'Status pesanan berhasil disimpan.');
    }
}
