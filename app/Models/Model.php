<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:49:13 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Model
 *
 * @property int $id
 * @property string $nama_model
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Model extends Eloquent
{
	protected $table = 'model';

	protected $fillable = [
		'nama_model',
		'harga'
	];
	public function order()
    {
        return $this->belongsTo('App\Models\Order', 'model');
    }
}
