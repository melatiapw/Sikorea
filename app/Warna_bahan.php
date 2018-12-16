<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna_bahan extends Model
{
    protected $table = 'warna_bahan';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'warna_bahan');
    } 
}
