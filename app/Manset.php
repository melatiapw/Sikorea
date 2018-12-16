<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manset extends Model
{
    protected $table = 'manset';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasOne('App\Order', 'manset');
    } 
}
