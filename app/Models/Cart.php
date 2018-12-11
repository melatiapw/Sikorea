<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 09:27:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cart
 * 
 * @property int $id
 * @property string $status
 * @property string $total_harga
 * @property int $users
 * @property string $alamat_cp
 * @property string $no_cp
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Cart extends Eloquent
{
	protected $table = 'cart';

	protected $casts = [
		'users' => 'int'
	];

	protected $fillable = [
		'status',
		'total_harga',
		'users',
		'alamat_cp',
		'no_cp'
	];
}
