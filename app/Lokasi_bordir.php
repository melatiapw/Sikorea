<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi_bordir extends Model
{
    protected $table = 'lokasi_bordir';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'lokasi_bordir');
    } 
}
