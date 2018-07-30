<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'name' => 'Admin', 'email' => 'x@y.com', 'password' => '$2y$10$b6661YFa9VnessvC2TNU6uX7W08UxYoW3Hlje56bMQxv5RPHogSdy'
        ]);
    }
}
