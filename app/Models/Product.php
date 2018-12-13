<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 12:05:43 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $nama_product
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Product extends Eloquent
{
	protected $table = 'product';

	protected $fillable = [
		'nama_product'
	];
}
