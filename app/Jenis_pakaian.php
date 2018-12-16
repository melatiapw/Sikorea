<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_pakaian extends Model
{
    protected $table = 'jenis_pakaian';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'Jenis_pakaian');
    } 
}
