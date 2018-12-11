<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 09:27:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WarnaSablon
 * 
 * @property int $id
 * @property string $nama_warna_sablon
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class WarnaSablon extends Eloquent
{
	protected $table = 'warna_sablon';

	protected $fillable = [
		'nama_warna_sablon',
		'harga'
	];
}
