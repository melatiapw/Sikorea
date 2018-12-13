<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 12:05:43 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Manset
 * 
 * @property int $id
 * @property string $nama_manset
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Manset extends Eloquent
{
	protected $table = 'manset';

	protected $fillable = [
		'nama_manset',
		'harga'
	];
}
