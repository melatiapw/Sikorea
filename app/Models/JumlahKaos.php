<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:49:12 +0000.
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
class JumlahKaos extends Eloquent
{
	protected $fillable = [
		'nama_jumlah_produk',
		'harga'
	];
}
