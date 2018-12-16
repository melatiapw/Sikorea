<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    public function bahan_join()
    {
        return $this->belongsTo('App\Bahan', 'bahan');
    }

    public function model_join()
    {
        return $this->belongsTo('App\Mmodel', 'model');
    }

    public function jenis_pakaian_join()
    {
        return $this->belongsTo('App\Jenis_pakaian', 'jenis_pakaian');
    }

    public function jenis_ukuran_join()
    {
        return $this->belongsTo('App\Jenis_ukuran', 'jenis_ukuran');
    }

    public function sablon_join()
    {
        return $this->belongsTo('App\Sablon', 'sablon');
    }

    public function lengan_join()
    {
        return $this->belongsTo('App\Lengan', 'lengan');
    }

    public function manset_join()
    {
        return $this->belongsTo('App\Manset', 'manset');
    }

    public function lokasi_sablon_join()
    {
        return $this->belongsTo('App\Lokasi_sablon', 'lokasi_sablon');
    }

    public function lokasi_bordir_join()
    {
        return $this->belongsTo('App\Lokasi_bordir', 'lokasi_bordir');
    }

    public function warna_bahan_join()
    {
        return $this->belongsTo('App\Warna_bahan', 'warna_bahan');
    }

    public function warna_sablon_join()
    {
        return $this->belongsTo('App\Warna_sablon', 'warna_sablon');
    }

}
