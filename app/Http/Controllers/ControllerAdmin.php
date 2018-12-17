<?php
namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use\App\Models\Cart;
use App\Kategori;
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
                                ->join('jumlah_kaos', 'jumlah_kaos.id', '=', 'order.jumlah_produk')
                                ->join('jenis_ukuran', 'jenis_ukuran.id', '=', 'order.jenis_ukuran')
                                ->select('order.*', 'jenis_pakaian.nama_jenis_pakaian', 'model.nama_model',
                                          'bahan.nama_bahan', 'warna_bahan.nama_warna_bahan', 'manset.nama_manset', 'lengan.nama_lengan',
                                          'sablon.nama_sablon', 'warna_sablon.nama_warna_sablon',
                                          'lokasi_sablon.nama_lokasi_sablon', 'lokasi_bordir.nama_lokasi_bordir',
                                          'jumlah_kaos.nama_jumlah_produk','jenis_ukuran.nama_jenis_ukuran')
                                ->get();
      return view('admin.pesanan')->withKeranjang($cart)
                                ->withPesanan($order);
    }
    public function katalog()
    {
        return view('admin.katalog');
    }
    public function terima($id)
    {
      Cart::find($id)->update(['status' => 3]);
      return redirect()->back();
    }
    public function tolak($id)
    {
      Cart::find($id)->update(['status' => 1]);
      return redirect()->back();
    }
}
