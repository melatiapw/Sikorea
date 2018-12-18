<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:51:32 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sablon
 * 
 * @property int $id
 * @property string $nama_sablon
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Sablon extends Eloquent
{
	protected $table = 'sablon';

	protected $fillable = [
		'nama_sablon',
		'harga'
	];
}
