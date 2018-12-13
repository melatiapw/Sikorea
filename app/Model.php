<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Model extends Authenticatable
{
    protected $table = 'model';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_model', 'harga'];
}
