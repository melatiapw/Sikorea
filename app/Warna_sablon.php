<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna_sablon extends Model
{
    protected $table = 'warna_sablon';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'warna_sablon');
    } 
}
