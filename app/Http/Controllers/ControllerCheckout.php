<?php

namespace App\Http\Controllers;

use Auth;
use App\Cart;
use App\Order;
use App\Kategori;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Storage;
class ControllerCheckout extends Controller
{

    public function statustransaksi()
    {
      $cart = DB::table('cart')->where("id", '2')->get();
      return view('statustransaksi')->withKeranjang($cart);
    }

    public function showBuktiPembayaran()
    {
      $cart = Cart::all();
		    return view('showBuktiPembayaran', compact('buktipembayaran'));
    }

    public function upload(Request $request)
    {
        $cart = Cart::first();

        $this->validate($request, [
          'file' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);
        $uploadedFile = $request->file('file');
        $path = $uploadedFile->store('public/uploadgambar');
        $cart->file_gambar = $path;
		    $cart->save();
        return redirect()
          ->back()
          ->with(['sukses' => 'Bukti Pembayaran has been uploaded']);

	}
}
