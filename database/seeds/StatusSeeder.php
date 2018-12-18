<?php
use Illuminate\Database\Seeder;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('status')->insert([
                [
                  'id' =>"1",
                  'subject' => "Pesanan Ditolak",
                ],
                [
                  'id' =>"2",
                  'subject' => "Belum Acc",
                ],
                [
                  'id' =>"3",
                  'subject' => "Belum Bayar",
                ],
                [
                  'id' =>"4",
                  'subject' => "Dalam Proses",
                ],
                [
                  'id' =>"5",
                  'subject' => "Selesai",
                ],
      ]);
    }
}
