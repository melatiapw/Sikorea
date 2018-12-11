<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:24:58 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Lengan
 * 
 * @property int $id
 * @property string $nama_lengan
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Lengan extends Eloquent
{
	protected $table = 'lengan';

	protected $fillable = [
		'nama_lengan',
		'harga'
	];
}
