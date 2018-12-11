<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 09:27:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class JenisPakaian
 * 
 * @property int $id
 * @property string $nama_jenis_pakaian
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class JenisPakaian extends Eloquent
{
	protected $table = 'jenis_pakaian';

	protected $fillable = [
		'nama_jenis_pakaian'
	];
}
