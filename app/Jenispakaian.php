<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Jenispakaian extends Authenticatable
{
    protected $table = 'jenis_pakaian';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_jenis_pakaian'];
}
