<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:24:58 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ModelHasPermission
 * 
 * @property int $permission_id
 * @property string $model_type
 * @property int $model_id
 * 
 * @property \App\Models\Permission $permission
 *
 * @package App\Models
 */
class ModelHasPermission extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'permission_id' => 'int',
		'model_id' => 'int'
	];

	public function permission()
	{
		return $this->belongsTo(\App\Models\Permission::class);
	}
}
