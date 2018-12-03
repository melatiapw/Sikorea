<?php

use Illuminate\Database\Seeder;

class formSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('model')->insert([
        [
          'id' =>"1",
          'nama_model' => "Oblong",
          'harga' => "35000",
        ],

        [
          'id' =>"2",
          'nama_model' => "Raglan",
          'harga' => "35000",
        ],

        [
          'id' =>"3",
          'nama_model' => "Kerah",
          'harga' => "35000",
        ],
      ]);

      DB::table('warna_bahan')->insert([
        [
          'id' =>"1",
          'nama_warna_bahan' => "Satu Warna",
          'harga' => "1",
        ],

        [
          'id' =>"2",
          'nama_warna_bahan' => "Dua Warna",
          'harga' => "1.005",
        ],

        [
          'id' =>"3",
          'nama_warna_bahan' => "Tiga Warna",
          'harga' => "1.01",
        ],

        [
          'id' =>"4",
          'nama_warna_bahan' => "Lebih Tiga Warna",
          'harga' => "1.02",
        ],
      ]);

      DB::table('sablon')->insert([

        [
          'id' =>"1",
          'nama_sablon' => "Rubber",
          'harga' => "5000",
        ],

        [
          'id' =>"2",
          'nama_sablon' => "Plastisol",
          'harga' => "10000",
        ],

        [
          'id' =>"3",
          'nama_sablon' => "Cabut Warna",
          'harga' => "10000",
        ],

        [
          'id' =>"4",
          'nama_sablon' => "Sparasi",
          'harga' => "15000",
        ],

        [
          'id' =>"5",
          'nama_sablon' => "Polyflex",
          'harga' => "15000",
        ],
      ]);

      DB::table('warna_sablon')->insert([
        [
          'id' =>"1",
          'nama_warna_sablon' => "1-2 Warna",
          'harga' => "0",
        ],

        [
          'id' =>"2",
          'nama_warna_sablon' => "3-4 Warna",
          'harga' => "1.03",
        ],

        [
          'id' =>"3",
          'nama_warna_sablon' => "5 Warna",
          'harga' => "1.05",
        ],

        [
          'id' =>"4",
          'nama_warna_sablon' => ">5 Warna",
          'harga' => "1.07",
        ],
        ]);

      DB::table('lokasi_bordir')->insert([
        [
          'id' =>"1",
          'nama_lokasi_bordir' => "0 Tempat",
          'harga' => "0",
        ],

        [
          'id' =>"2",
          'nama_lokasi_bordir' => "1 Tempat",
          'harga' => "3000",
        ],

        [
          'id' =>"3",
          'nama_lokasi_bordir' => "2 Tempat",
          'harga' => "6000",
        ],

        [
          'id' =>"4",
          'nama_lokasi_bordir' => "3 Tempat",
          'harga' => "9000",
        ],

        [
          'id' =>"5",
          'nama_lokasi_bordir' => "4 Tempat",
          'harga' => "12000",
        ],

        [
          'id' =>"6",
          'nama_lokasi_bordir' => "5 Tempat",
          'harga' => "15000",
        ],

        [
          'id' =>"7",
          'nama_lokasi_bordir' => "6 Tempat",
          'harga' => "17000",
        ],

        [
          'id' =>"8",
          'nama_lokasi_bordir' => "7 Tempat",
          'harga' => "19000",
        ],

        [
          'id' =>"9",
          'nama_lokasi_bordir' => "8 Tempat",
          'harga' => "21000",
        ],

        [
          'id' =>"10",
          'nama_lokasi_bordir' => "9 Tempat",
          'harga' => "23000",
        ],
        ]);
    }
}
