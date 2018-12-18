<?php
namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use\App\Models\Cart;
use\App\Models\Users;
use App\Kategori;
use Notification;
use App\Notifications\PesananBaru;
use App\Notifications\StatusPesanan;

class ControllerAdmin extends Controller
{
    public function pesanan()
    {
      $cart = DB::table('cart')->get();
      $order = DB::table('order')->get();
      return view('admin.pesanan')->withKeranjang($cart)->withPesanan($order);
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
    public function updateStatus($id, Request $request)
    {
      $Pengguna = Auth::user();
      $Cart = Cart::find($id);
      $Cart->status = $request->status;
    	$Cart->save();
      //Mengirim Notifikasi Perubahan Status Pesanan
      if ($Pengguna->hasRole('admin')) {
        $IDPembeli = $Cart->users;
        $Pembeli = Users::where('id', '=', $IDPembeli)->first();
        Notification::send($Pembeli, new StatusPesanan($Cart));
      }
      return redirect()->back()->with('Success', 'Status pesanan berhasil disimpan.');
    }
}
