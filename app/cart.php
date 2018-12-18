<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Cart extends Model
{
  use Notifiable;
  protected $table = 'cart';
  protected $primaryKey = 'id';
  protected $fillable = ['status', 'total_harga', 'users','file_gambar'];

}
