<?php

use Illuminate\Database\Seeder;

class TyresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'vehicles';

        DB::table($tableName)->insert([
            'manufacturer_id' => 1,
            'axle_id' => 1,
            'width_id' => 1,
            'ratio' => 80,
            'diameter' => 20,
            'tyre_load_id' => 1,
            'tyre_speed_class_id' => 1,
            'regroovable' => true,
            'mileage' => 10,
            'tread_depth_i' => 1,
            'tread_depth_m' => 1,
            'tread_depth_o' => 1,
            'location_id' => 1
        ]);
    }
}
