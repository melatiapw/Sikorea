<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\JenisPakaian;
use App\Models\Model;
use App\Models\Bahan;
use App\Models\WarnaBahan;
use App\Models\Manset;
use App\Models\Sablon;
use App\Models\WarnaSablon;
use App\Models\LokasiSablon;
use App\Models\LokasiBordir;
use App\Models\JenisUkuran;
use App\Models\JumlahKaos;
use App\Models\Lengan;
use App\Models\Order;
use App\Models\Cart;

use Illuminate\Http\RedirectResponse;
use Storage;

class ControllerOrder extends Controller
{
    //Menampilkan halaman form pembelian
    public function index()
    {
    	$mod = Model::get();
    	$bah = Bahan::get();
    	$pak = JenisPakaian::get();
    	$uk = JenisUkuran::get();
    	$lb = LokasiBordir::get();
      $ls = LokasiSablon::get();
    	$sab = Sablon::get();
    	$wb = WarnaBahan::get();
    	$ws = WarnaSablon::get();
      $len = Lengan::get();
      $man = Manset::get();
      return view('order', compact('pak', 'mod', 'bah', 'uk', 'lb', 'sab', 'wb', 'ws', 'ls', 'len', 'man'));
    }
    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'nullable|max:100',
          'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);
    	$order = new Order;
    	$jenis_pakaian = explode(',', $request->jenis_pakaian);
    	$model = explode(',', $request->model);
    	$bahan = explode(',', $request->bahan);
    	$warna_bahan = explode(',', $request->warna_bahan);
    	$pilihan_warna_bahan = $request->pilihan_warna_bahan;
    	$manset = explode(',', $request->manset);
    	$lengan = explode(',', $request->lengan);
    	$sablon = explode(',', $request->sablon);
    	$warna_sablon = explode(',', $request->warna_sablon);
    	$pilihan_warna_sablon = $request->pilihan_warna_sablon;
    	$lokasi_sablon = explode(',', $request->lokasi_sablon);
    	$lokasi_bordir = explode(',', $request->lokasi_bordir);
    	$jenis_ukuran = explode(',', $request->jenis_ukuran);
        $order->jenis_pakaian = $jenis_pakaian[0];
        $order->model = $model[0];
        $order->bahan = $bahan[0];
        $order->warna_bahan = $warna_bahan[0];
        $order->manset = $manset[0];
        $order->lengan = $lengan[0];
        $order->sablon = $sablon[0];
        $order->warna_sablon = $warna_sablon[0];
        $order->lokasi_sablon = $lokasi_sablon[0];
        $order->lokasi_bordir = $lokasi_bordir[0];
        $order->jenis_ukuran = $jenis_ukuran[0];
        $order->jumlah_produk = $request->jumlah;
        $order->harga = $request->harga;
        $order->pilihan_warna_sablon = $pilihan_warna_sablon;
        $order->pilihan_warna_bahan = $pilihan_warna_bahan;
    	  $cartExist = Cart::orderBy('created_at', 'desc')->where('status', NULL)->first();
    	if($cartExist){
    		$order->cart_id = $cartExist->id;
    	}else{
    		$cart = new Cart;
    		// $cart->users = Input::get('user_id');
            $cart->save();
            $order->cart_id = $cart->id;
        }

        $uploadedFile = $request->file('file');
        $path = $uploadedFile->store('public/files');

            // 'title' => $request->title ?? $uploadedFile->getClientOriginalName()
        $order->filename = $path;
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
    public function destroy($id){
        $order = Order::findorFail($id);
        $order->delete();
        return redirect('/cart');
    }
}
