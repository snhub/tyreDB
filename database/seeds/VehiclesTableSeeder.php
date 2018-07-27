<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vecicles')->insert([
            'registration' => 'RT-XD 123', 'nickname' => 'XD', 'model_id' => '1'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-ZD 676', 'nickname' => '676', 'model_id' => '1'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-ZZ 756', 'nickname' => 'ZZ', 'model_id' => '2'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-O 943 ', 'nickname' => '963', 'model_id' => '3'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-SF 414', 'nickname' => 'SF', 'model_id' => '1'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-NF 364', 'nickname' => '364', 'model_id' => '1'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-DH 493', 'nickname' => 'DH', 'model_id' => '1'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-ZP 776', 'nickname' => '776', 'model_id' => '2'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-VE 531', 'nickname' => 'VE', 'model_id' => '1'
        ]);
        DB::table('vecicles')->insert([
            'registration' => 'RT-YN 863', 'nickname' => 'YN', 'model_id' => '1'
        ]);
    }
}
