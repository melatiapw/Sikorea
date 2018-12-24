<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Tiket;
use App\Pengguna;
use App\Unit;
use App\Mail\KirimTiket;
use App\Mail\ForwardPengaduan;
use App\Notifications\TiketBaru;
use App\Notifications\StatusTiket;
use App\Notifications\TiketAssign;
use Notification;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
//Menyimpan status Pesanan
public function save($ID, $Status = null)
{
    $Pengguna = Auth::user();
    $Pesanan = Pesanan::find($ID);
    if(is_null($Status)) $Status = (int) Input::get('Status');

    if(!$Pesanan) return response('Pesanan tidak ditemukan.', 404);
    if(!$Status) return back()->with('Error', 'Status wajib diisi.');
    if(
      !$Pengguna->hasRole('Admin') &&
    ) return response('Tidak diizinkan.', 403);

    $Pesanan->Status = $Status;
    $Pesanan->save();

    //Mengirim Notifikasi Perubahan Status Pesanan
    if (!$Pengguna->hasRole('Pelanggan')) {
      $IDPesananPengguna = $Pesanan->mstPenggunaID1;
      $Pengguna = Pengguna::where('ID', '=', $IDPesananPengguna)->first();
      Notification::send($Pengguna, new StatusPesanan($Pesanan));
      }
    return back()->with('Success', 'Status Pesanan berhasil disimpan.');
}
