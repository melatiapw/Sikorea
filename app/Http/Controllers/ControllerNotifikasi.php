<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Tiket;
use App\Tanggapan;
use App\Pengguna;
use App\Notifications\NotifikasiTanggapan;
use Illuminate\Notifications\DatabaseNotification;

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
      $idtiket = $notification->data['id_tiket'];
    
      return redirect('/Tiket/'.$idtiket);
    }
}
