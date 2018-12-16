<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_ukuran extends Model
{
    protected $table = 'jenis_ukuran';
    protected $primaryKey='id';

    public function order()
    {
        return $this->belongsTo('App\Order', 'jenis_ukuran');
    } 
}
