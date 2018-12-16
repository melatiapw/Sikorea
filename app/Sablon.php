<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sablon extends Model
{
    protected $table = 'sablon';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'sablon');
    } 
}
