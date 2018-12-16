<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lengan extends Model
{
    protected $table = 'lengan';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'lengan');
    } 
}
