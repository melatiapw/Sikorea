<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mmodel extends Model
{
    protected $table = 'model';
    protected $primaryKey='id';

    public function order()
    {
        return $this->belongsTo('App\Order', 'model');
    } 
}
