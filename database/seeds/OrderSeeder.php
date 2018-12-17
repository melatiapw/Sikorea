<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('product')->insert([
          [
            'id' =>"1",
            'nama_product' => "Kaos",
          ],
      ]);
      DB::table('cart')->insert([
          [
            'id' =>"1",
            'status' => "2",
            'total_harga' => "20000",
            'users' => "6",
            'alamat_cp' => "dramaga",
            'no_cp' => "082368276465",
          ],
          [
            'id' =>"2",
            'status' => "3",
            'total_harga' => "40000",
            'users' => "7",
            'alamat_cp' => "bogor",
            'no_cp' => "082368276464",
          ],
      ]);
      DB::table('order')->insert([
          [
            'id' =>"1",
            'harga' => "10000",
            'cart_id' => "1",
            'product_id' => "1",
            'jenis_pakaian' => "1",
            'model' => "1",
            'bahan' => "1",
            'warna_bahan' => "1",
            'pilihan_warna_bahan' => "biru",
            'warna_bahan' => "1",
            'manset' => "1",
            'lengan' => "1",
            'sablon' => "1",
            'warna_sablon' => "1",
            'pilihan_warna_sablon' => "merah",
            'lokasi_sablon' => "1",
            'bordir' => "1",
            'jumlah_bordir' => "1",
            'jumlah_produk' => "1",
            'jenis_ukuran' => "1",

          ],
          [
            'id' =>"2",
            'harga' => "10000",
            'cart_id' => "1",
            'product_id' => "1",
            'jenis_pakaian' => "2",
            'model' => "1",
            'bahan' => "1",
            'warna_bahan' => "1",
            'pilihan_warna_bahan' => "biru",
            'warna_bahan' => "1",
            'manset' => "1",
            'lengan' => "1",
            'sablon' => "1",
            'warna_sablon' => "1",
            'pilihan_warna_sablon' => "merah",
            'lokasi_sablon' => "1",
            'bordir' => "1",
            'jumlah_bordir' => "1",
            'jumlah_produk' => "1",
            'jenis_ukuran' => "1",

          ],
          [
            'id' =>"3",
            'harga' => "40000",
            'cart_id' => "2",
            'product_id' => "1",
            'jenis_pakaian' => "1",
            'model' => "1",
            'bahan' => "1",
            'warna_bahan' => "1",
            'pilihan_warna_bahan' => "biru",
            'warna_bahan' => "1",
            'manset' => "1",
            'lengan' => "1",
            'sablon' => "1",
            'warna_sablon' => "1",
            'pilihan_warna_sablon' => "merah",
            'lokasi_sablon' => "1",
            'bordir' => "1",
            'jumlah_bordir' => "1",
            'jumlah_produk' => "1",
            'jenis_ukuran' => "1",

          ],
      ]);
    }
}
