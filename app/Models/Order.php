<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 12:05:43 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $harga
 * @property int $cart_id
 * @property int $product_id
 * @property int $jenis_pakaian
 * @property int $model
 * @property int $bahan
 * @property int $warna_bahan
 * @property string $pilihan_warna_bahan
 * @property int $manset
 * @property int $sablon
 * @property int $warna_sablon
 * @property string $pilihan_warna_sablon
 * @property int $lokasi_sablon
 * @property int $bordir
 * @property int $jumlah_bordir
 * @property int $jumlah_produk
 * @property int $jenis_ukuran
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Order extends Eloquent
{
	protected $table = 'order';

	protected $casts = [
		'harga' => 'int',
		'cart_id' => 'int',
		'product_id' => 'int',
		'jenis_pakaian' => 'int',
		'model' => 'int',
		'bahan' => 'int',
		'warna_bahan' => 'int',
		'manset' => 'int',
		'sablon' => 'int',
		'warna_sablon' => 'int',
		'lokasi_sablon' => 'int',
		'bordir' => 'int',
		'jumlah_bordir' => 'int',
		'jumlah_produk' => 'int',
		'jenis_ukuran' => 'int'
	];

	protected $fillable = [
		'harga',
		'cart_id',
		'product_id',
		'jenis_pakaian',
		'model',
		'bahan',
		'warna_bahan',
		'pilihan_warna_bahan',
		'manset',
		'sablon',
		'warna_sablon',
		'pilihan_warna_sablon',
		'lokasi_sablon',
		'bordir',
		'jumlah_bordir',
		'jumlah_produk',
		'jenis_ukuran'
	];
}
