<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:49:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class JenisUkuran
 *
 * @property int $id
 * @property string $nama_jenis_ukuran
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class JenisUkuran extends Eloquent
{
	protected $table = 'jenis_ukuran';

	protected $fillable = [
		'nama_jenis_ukuran',
		'harga'
	];
	public function order()
    {
        return $this->belongsTo('App\Models\Order', 'jenis_ukuran');
    }
}
