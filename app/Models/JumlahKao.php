<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 09:27:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class JumlahKao
 * 
 * @property int $id
 * @property string $nama_jumlah_produk
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class JumlahKao extends Eloquent
{
	protected $fillable = [
		'nama_jumlah_produk',
		'harga'
	];
}
