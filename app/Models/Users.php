<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Dec 2018 14:03:43 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Notifications\Notifiable;

/**
 * Class Users
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Users extends Eloquent
{
	use Notifiable;
	
	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'remember_token'
	];
}
