<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

use\App\Models\Cart;
class ControllerNotifikasi extends Controller
{
  /**
     * mark a specific notification as read
     *
     * @param $id
     * @return mixed
     */
    public function NotifMarkAsRead($id) {
      $notification = Auth::user()->notifications()->findOrFail($id);
      $notification->markAsRead();
      $idpesanan = $notification->data['id_pesanan'];
      $cart = Cart::find($idpesanan);

      $Pengguna = Auth::user();
      if(!$Pengguna->hasRole('admin')){
        return redirect('/statustransaksi');
      }

      else if($Pengguna->hasRole('admin')) {
        if ($cart->status == 2) {
          return redirect('/home');
        }
        elseif ($cart->status == 3) {
          return redirect('/pesanan');
        }
      }
    }
}
