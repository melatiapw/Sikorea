<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:49:13 +0000.
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
 * @property int $lengan
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
		'lengan' => 'int',
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
		'lengan',
		'sablon',
		'warna_sablon',
		'pilihan_warna_sablon',
		'lokasi_sablon',
		'bordir',
		'jumlah_bordir',
		'jumlah_produk',
		'jenis_ukuran'
	];

	public function cart()
    {
        return $this->belongsTo('App\Models\Cart');
    }

    public function bahan_join()
    {
        return $this->belongsTo('App\Models\Bahan', 'bahan');
    }

    public function model_join()
    {
        return $this->belongsTo('App\Models\Model', 'model');
    }

    public function jenis_pakaian_join()
    {
        return $this->belongsTo('App\Models\JenisPakaian', 'jenis_pakaian');
    }

    public function jenis_ukuran_join()
    {
        return $this->belongsTo('App\Models\JenisUkuran', 'jenis_ukuran');
    }

    public function sablon_join()
    {
        return $this->belongsTo('App\Models\Sablon', 'sablon');
    }

    public function lengan_join()
    {
        return $this->belongsTo('App\Models\Lengan', 'lengan');
    }

    public function manset_join()
    {
        return $this->belongsTo('App\Models\Manset', 'manset');
    }

    public function lokasi_sablon_join()
    {
        return $this->belongsTo('App\Models\LokasiSablon', 'lokasi_sablon');
    }

    public function lokasi_bordir_join()
    {
        return $this->belongsTo('App\Models\LokasiBordir', 'lokasi_bordir');
    }

    public function warna_bahan_join()
    {
        return $this->belongsTo('App\Models\WarnaBahan', 'warna_bahan');
    }

    public function warna_sablon_join()
    {
        return $this->belongsTo('App\Models\WarnaSablon', 'warna_sablon');
    }
}
