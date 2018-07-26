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
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
            'manufacturer_ref' => 1,
            'axle_ref' => 1,
            'width_ref' => 1,
            'ratio' => 80,
            'diameter' => 20,
            'tyre_load_ref' => 1,
            'tyre_speed_class_ref' => 1,
            'tread_depth_i' => 10,
            'tread_depth_m' => 10,
            'tread_depth_o' => 10,
            'location_ref' => 1
        ]);
    }
}
