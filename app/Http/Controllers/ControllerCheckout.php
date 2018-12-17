<?php

namespace App\Http\Controllers;

use Auth;
use App\Cart;
use App\Order;
use App\Kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControllerCheckout extends Controller
{

    public function statustransaksi()
    {
      $cart = DB::table('cart')->where("id", '2')->get();
      return view('statustransaksi')->withKeranjang($cart);
    }

    public function view()
    {
		    return view('imageUpload');

    }

    public function upload(Request $request)
    {
		  $this->validate($request, [
	    	'image' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
		    ]);

		   $file = $request->file('image');
		     // image upload in public/upload folder.
		   $file->move('uploads', $file->getClientOriginalName());
		   echo 'Image Uploaded Successfully';
	}
}
