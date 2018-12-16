<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi_sablon extends Model
{
    protected $table = 'lokasi_sablon';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'lokasi_sablon');
    } 
}
