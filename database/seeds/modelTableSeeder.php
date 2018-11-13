<?php

use Illuminate\Database\Seeder;

class modelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model')->insert([
          'id' =>"1",
          'nama_model' => "Oblong",
          'harga' => "35000",

          'id' =>"2",
          'nama_model' => "Raglan",
          'harga' => "35000",

          'id' =>"3",
          'nama_model' => "Kerah",
          'harga' => "35000",
        ]);
    }
}
