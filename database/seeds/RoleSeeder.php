<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
          [
            'id' =>"1",
            'name' => "admin",
            'guard_name' => "web",
          ],
          [
            'id' =>"2",
            'name' => "user",
            'guard_name' => "web",
          ],
        ]);
        DB::table('model_has_roles')->insert([
          [
            'role_id' =>"1",
            'model_type' => "App\User",
            'model_id' => "5",
          ],
        ]);
    }
}
