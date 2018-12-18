<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use\App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Order;
use App\Models\Model;
use App\Models\Bahan;
use App\Models\JenisPakaian;
use App\Models\JenisUkuran;
use App\Models\LokasiBordir;
use App\Models\Sablon;
use App\Models\LokasiSablon;
use App\Models\WarnaBahan;
use App\Models\WarnaSablon;
use App\Models\Lengan;
use App\Models\Manset;

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
         $cart = DB::table('cart')->join('users', 'users.id', '=', 'cart.users')
                                  ->select('cart.*', 'users.name')
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
         return view('admin.requestPage')->withKeranjang($cart)
                                        ->withPesanan($order)
                                        ->with(compact('pemesan'));
       }
       elseif (Auth::user()->hasRole('user')) {
          return view('home');
       }
       else {
         return view('home');
       }

     }


}
