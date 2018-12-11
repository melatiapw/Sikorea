<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([

        'id' => "5",
        'name' => "fanani",
        'email' => "fanani@gmail.com",
        'password' => Hash::make("fananihehe"),
        
      ]);
    }

}
