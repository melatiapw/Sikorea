<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:51:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WarnaBahan
 *
 * @property int $id
 * @property string $nama_warna_bahan
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class WarnaBahan extends Eloquent
{
	protected $table = 'warna_bahan';

	protected $fillable = [
		'nama_warna_bahan',
		'harga'
	];
	public function order()
    {
        return $this->hasOne('App\Models\Order', 'warna_bahan');
    }
}
