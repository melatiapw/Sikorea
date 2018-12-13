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

      DB::table('manset')->insert([
        [
          'id' =>"1",
          'nama_manset' => "Iya",
          'harga' => "5000",
        ],
        [
          'id' =>"2",
          'nama_manset' => "Tidak",
          'harga' => "0",
        ],
        ]);
      DB::table('lokasi_sablon')->insert([
        [
          'id' =>"1",
          'nama_lokasi_sablon' => "Depan Kecil(0 - 12 cm)",
          'harga' => "1000",
        ],

        [
          'id' =>"2",
          'nama_lokasi_sablon' => "Depan Besar(>12 cm)",
          'harga' => "2000",
        ],

        [
          'id' =>"3",
          'nama_lokasi_sablon' => "Belakang Kecil(0 - 12 cm)",
          'harga' => "1000",
        ],

        [
          'id' =>"4",
          'nama_lokasi_sablon' => "Belakang Besar(>12 cm)",
          'harga' => "2000",
        ],

        [
          'id' =>"5",
          'nama_lokasi_sablon' => "Lengan Kanan",
          'harga' => "1000",
        ],

        [
          'id' =>"6",
          'nama_lokasi_sablon' => "Lengan Kiri",
          'harga' => "1000",
        ],

        [
          'id' =>"7",
          'nama_lokasi_sablon' => "Fullprint Depan",
          'harga' => "10000",
        ],

        [
          'id' =>"8",
          'nama_lokasi_sablon' => "Fullprint Belakang",
          'harga' => "10000",
        ],

        [
          'id' =>"9",
          'nama_lokasi_sablon' => "Label Dalam Belakang",
          'harga' => "1000",
        ],
        ]);

      DB::table('bahan')->insert([
        [
          'id' =>"1",
          'nama_bahan' => "Katun Combed 20s",
          'harga' => "37000",
        ],
        [
          'id' =>"2",
          'nama_bahan' => "Katun Combed 24s",
          'harga' => "36500",
        ],
        [
          'id' =>"3",
          'nama_bahan' => "Katun Combed 30s",
          'harga' => "35000",
        ],
        [
          'id' =>"4",
          'nama_bahan' => "Katun Carded 20s",
          'harga' => "32000",
        ],
        [
          'id' =>"5",
          'nama_bahan' => "Katun Carded 24s",
          'harga' => "31500",
        ],
        [
          'id' =>"6",
          'nama_bahan' => "Katun Carded 30s",
          'harga' => "30000",
        ],

        [
          'id' =>"7",
          'nama_bahan' => "Lacoste CVC",
          'harga' => "47000",
        ],
        [
          'id' =>"8",
          'nama_bahan' => "Lacoste Pique",
          'harga' => "49000",
        ],
        [
          'id' =>"9",
          'nama_bahan' => "PE Single",
          'harga' => "19500",
        ],
        [
          'id' =>"10",
          'nama_bahan' => "PE Double",
          'harga' => "22000",
        ],
        [
          'id' =>"11",
          'nama_bahan' => "Dryfit Titik",
          'harga' => "22000",
        ],
        [
          'id' =>"12",
          'nama_bahan' => "Dryfit Paving",
          'harga' => "21000",
        ],
        ]);
      DB::table('jumlah_kaos')->insert([
        [
          'id' =>"1",
          'nama_jumlah_produk' => "12 - 23 pcs",
          'harga' => "0",
        ],
        [
          'id' =>"2",
          'nama_jumlah_produk' => "24 - 49 pcs",
          'harga' => "-3000",
        ],
        [
          'id' =>"3",
          'nama_jumlah_produk' => "50 - 99 pcs",
          'harga' => "-4000",
        ],
        [
          'id' =>"4",
          'nama_jumlah_produk' => "100 - 110 pcs",
          'harga' => "-5000",
        ],
        [
          'id' =>"5",
          'nama_jumlah_produk' => "110 - 199 pcs",
          'harga' => "-5500",
        ],
        [
          'id' =>"6",
          'nama_jumlah_produk' => "200 - 300 pcs",
          'harga' => "-6000",
        ],
        [
          'id' =>"7",
          'nama_jumlah_produk' => "301 - 500 pcs",
          'harga' => "-7000",
        ],
        [
          'id' =>"8",
          'nama_jumlah_produk' => ">500 pcs",
          'harga' => "-8000",
        ],
        ]);

      DB::table('lengan')->insert([
        [
          'id' =>"1",
          'nama_lengan' => "Panjang",
          'harga' => "5000",
        ],
        [
          'id' =>"2",
          'nama_lengan' => "Pendek",
          'harga' => "0",
        ],
        ]);
        DB::table('jenis_ukuran')->insert([
          [
            'id' =>"1",
            'nama_jenis_ukuran' => "S",
            'harga' => "0",
          ],
          [
            'id' =>"2",
            'nama_jenis_ukuran' => "M",
            'harga' => "0",
          ],
          [
            'id' =>"3",
            'nama_jenis_ukuran' => "L",
            'harga' => "0",
          ],
          [
            'id' =>"4",
            'nama_jenis_ukuran' => "XL",
            'harga' => "0",
          ],
          [
            'id' =>"5",
            'nama_jenis_ukuran' => "XXL",
            'harga' => "0",
          ],
          [
            'id' =>"6",
            'nama_jenis_ukuran' => "XXXL",
            'harga' => "0",
          ],
          ]);
        DB::table('jenis_pakaian')->insert([
          [
            'id' =>"1",
            'nama_jenis_pakaian' => "Balita",
            'harga' => "-7000",
          ],

          [
            'id' =>"2",
            'nama_jenis_pakaian' => "Anak",
            'harga' => "-5000",
          ],
          [
            'id' =>"3",
            'nama_jenis_pakaian' => "Dewasa",
            'harga' => "0",
          ],
          ]);
    }
}
