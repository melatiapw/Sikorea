<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:49:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LokasiSablon
 *
 * @property int $id
 * @property string $nama_lokasi_sablon
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class LokasiSablon extends Eloquent
{
	protected $table = 'lokasi_sablon';

	protected $fillable = [
		'nama_lokasi_sablon',
		'harga'
	];
	public function order()
    {
        return $this->hasOne('App\Models\Order', 'lokasi_sablon');
    }
}
