<?php
namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cart;
use App\Status;
use App\Kategori;
class ControllerAdmin extends Controller
{
    public function pesanan()
    {
      $cart = DB::table('cart')->get();
      $order = DB::table('order')->get();
      return view('admin.pesanan')->withKeranjang($cart)->withPesanan($order);
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

    public function updateStatus($id, Request $request)
    {

      $cart = Cart::find($id);
      $cart->status = $request->status;
    	$cart->save();
      return redirect()->back();
    }
}
