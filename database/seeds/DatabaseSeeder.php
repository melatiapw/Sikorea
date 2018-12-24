<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(formSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(StatusSeeder::class);
    }

}
