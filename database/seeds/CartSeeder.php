<?php

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cart')->insert([
                [
                  'id' =>"1",
                  'status' => "3",
                  'total_harga' =>"20000",
                  'users' =>"1",
                ],
      ]);
    }
}
