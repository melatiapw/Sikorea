<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 12:05:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Bahan
 * 
 * @property int $id
 * @property string $nama_bahan
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Bahan extends Eloquent
{
	protected $table = 'bahan';

	protected $fillable = [
		'nama_bahan',
		'harga'
	];
}
