<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-XD 123', 'nickname' => 'XD', 'model_id' => '1',
            'mileage' => '20000', 'type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-ZD 676', 'nickname' => '676', 'model_id' => '1',
            'mileage' => '35000', 'type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-ZZ 756', 'nickname' => 'ZZ', 'model_id' => '2',
            'mileage' => '50000', 'type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-O 943 ', 'nickname' => '963', 'model_id' => '3',
            'mileage' => '70000', 'type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-SF 414', 'nickname' => 'SF', 'model_id' => '1',
            'mileage' => '15000', 'type_id' => 2
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-NF 364', 'nickname' => '364', 'model_id' => '1',
            'mileage' => '8000', 'type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-DH 493', 'nickname' => 'DH', 'model_id' => '1',
            'mileage' => '12000', 'type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-ZP 776', 'nickname' => '776', 'model_id' => '2',
            'mileage' => '110000', 'type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-VE 531', 'nickname' => 'VE', 'model_id' => '1',
            'mileage' => '90000', 'type_id' => 2
        ]);
        DB::table('vehicles')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'registration' => 'RT-YN 863', 'nickname' => 'YN', 'model_id' => '1',
            'mileage' => '65000', 'type_id' => 2
        ]);
    }
}
