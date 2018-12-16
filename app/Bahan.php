<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $table = 'bahan';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'bahan');
    } 
}
