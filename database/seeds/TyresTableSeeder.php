<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TyresTableSeeder extends Seeder
{
    private $tableName = 'tyres';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 1, 'axle_id' => 1, 'width_id' => 1,
            'ratio' => 80, 'diameter' => 20,
            'tyre_load_id' => 1, 'tyre_speed_class_id' => 1,
            'regroovable' => true, 'mileage' => 10,
            'tread_depth_i' => 11, 'tread_depth_m' => 12, 'tread_depth_o' => 13,
            'location_id' => 1, 'vehicle_id' => 1
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 2, 'axle_id' => 1, 'width_id' => 11,
            'ratio' => 80, 'diameter' => 20,
            'tyre_load_id' => 1, 'tyre_speed_class_id' => 1,
            'regroovable' => true, 'mileage' => 10,
            'tread_depth_i' => 13, 'tread_depth_m' => 11, 'tread_depth_o' => 12,
            'location_id' => 1, 'vehicle_id' => 1
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 3, 'axle_id' => 1, 'width_id' => 14,
            'ratio' => 80, 'diameter' => 20,
            'tyre_load_id' => 1, 'tyre_speed_class_id' => 11,
            'regroovable' => true, 'mileage' => 10,
            'tread_depth_i' => 1.1, 'tread_depth_m' => 1.5, 'tread_depth_o' => 1.6,
            'location_id' => 1, 'vehicle_id' => 1
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 4, 'axle_id' => 1, 'width_id' => 1,
            'ratio' => 80, 'diameter' => 20,
            'tyre_load_id' => 2, 'tyre_speed_class_id' => 11,
            'regroovable' => true, 'mileage' => 100,
            'tread_depth_i' => 16.4, 'tread_depth_m' => 10.5, 'tread_depth_o' => 18.3,
            'location_id' => 1, 'vehicle_id' => 1
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 5, 'axle_id' => 2, 'width_id' => 1,
            'ratio' => 75, 'diameter' => 20,
            'tyre_load_id' => 4, 'tyre_speed_class_id' => 11,
            'regroovable' => true, 'mileage' => 100,
            'tread_depth_i' => 1, 'tread_depth_m' => 1, 'tread_depth_o' => 19,
            'location_id' => 1, 'vehicle_id' => 2
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 6, 'axle_id' => 2, 'width_id' => 1,
            'ratio' => 75, 'diameter' => 22.5,
            'tyre_load_id' => 1, 'tyre_speed_class_id' => 10,
            'regroovable' => true, 'mileage' => 100,
            'tread_depth_i' => 1, 'tread_depth_m' => 1, 'tread_depth_o' => 1,
            'location_id' => 1, 'vehicle_id' => 2
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 7, 'axle_id' => 2, 'width_id' => 1,
            'ratio' => 75, 'diameter' => 22.5,
            'tyre_load_id' => 3, 'tyre_speed_class_id' => 12,
            'regroovable' => true, 'mileage' => 100,
            'tread_depth_i' => 1.4, 'tread_depth_m' => 1.4, 'tread_depth_o' => 13.6,
            'location_id' => 1, 'vehicle_id' => 2
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 8, 'axle_id' => 2, 'width_id' => 1,
            'ratio' => 75, 'diameter' => 22.5,
            'tyre_load_id' => 6, 'tyre_speed_class_id' => 12,
            'regroovable' => true, 'mileage' => 1000,
            'tread_depth_i' => 23.8, 'tread_depth_m' => 26.4, 'tread_depth_o' => 23.9,
            'location_id' => 1, 'vehicle_id' => 2
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 9, 'axle_id' => 3, 'width_id' => 1,
            'ratio' => 75, 'diameter' => 22.5,
            'tyre_load_id' => 3, 'tyre_speed_class_id' => 11,
            'regroovable' => true, 'mileage' => 1000,
            'tread_depth_i' => 11, 'tread_depth_m' => 13, 'tread_depth_o' => 26,
            'location_id' => 1, 'vehicle_id' => 2
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 10, 'axle_id' => 3, 'width_id' => 1,
            'ratio' => 75, 'diameter' => 22.5,
            'tyre_load_id' => 6, 'tyre_speed_class_id' => 10,
            'regroovable' => true, 'mileage' => 1000,
            'tread_depth_i' => 14, 'tread_depth_m' => 12, 'tread_depth_o' => 23,
            'location_id' => 1, 'vehicle_id' => 2
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 11, 'axle_id' => 3, 'width_id' => 1,
            'ratio' => 75, 'diameter' => 22.5,
            'tyre_load_id' => 4, 'tyre_speed_class_id' => 11,
            'regroovable' => true, 'mileage' => 10000,
            'tread_depth_i' => 12, 'tread_depth_m' => 14, 'tread_depth_o' => 21,
            'location_id' => 1, 'vehicle_id' => 3
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 12, 'axle_id' => 3, 'width_id' => 1,
            'ratio' => 70, 'diameter' => 22.5,
            'tyre_load_id' => 4, 'tyre_speed_class_id' => 12,
            'regroovable' => true, 'mileage' => 10000,
            'tread_depth_i' => 13, 'tread_depth_m' => 15, 'tread_depth_o' => 28,
            'location_id' => 2, 'vehicle_id' => 3
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 1, 'axle_id' => 4, 'width_id' => 1,
            'ratio' => 70, 'diameter' => 22.5,
            'tyre_load_id' => 4, 'tyre_speed_class_id' => 2,
            'regroovable' => true, 'mileage' => 10000,
            'tread_depth_i' => 16, 'tread_depth_m' => 15, 'tread_depth_o' => 20,
            'location_id' => 2, 'vehicle_id' => 3
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 3, 'axle_id' => 4, 'width_id' => 1,
            'ratio' => 70, 'diameter' => 22.5,
            'tyre_load_id' => 4, 'tyre_speed_class_id' => 3,
            'regroovable' => true, 'mileage' => 10000,
            'tread_depth_i' => 13, 'tread_depth_m' => 14, 'tread_depth_o' => 27,
            'location_id' => 2, 'vehicle_id' => 3
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 5, 'axle_id' => 4, 'width_id' => 1,
            'ratio' => 70, 'diameter' => 22.5,
            'tyre_load_id' => 9, 'tyre_speed_class_id' => 4,
            'regroovable' => true, 'mileage' => 100000,
            'tread_depth_i' => 19, 'tread_depth_m' => 18, 'tread_depth_o' => 29,
            'location_id' => 2, 'vehicle_id' => 4
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 6, 'axle_id' => 4, 'width_id' => 1,
            'ratio' => 70, 'diameter' => 24,
            'tyre_load_id' => 9, 'tyre_speed_class_id' => 5,
            'regroovable' => true, 'mileage' => 100000,
            'tread_depth_i' => 18, 'tread_depth_m' => 17, 'tread_depth_o' => 30,
            'location_id' => 2, 'vehicle_id' => 4
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 7, 'axle_id' => 1, 'width_id' => 1,
            'ratio' => 70, 'diameter' => 24,
            'tyre_load_id' => 8, 'tyre_speed_class_id' => 6,
            'regroovable' => true, 'mileage' => 100000,
            'tread_depth_i' => 19, 'tread_depth_m' => 17, 'tread_depth_o' => 31,
            'location_id' => 2, 'vehicle_id' => 4
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 9, 'axle_id' => 1, 'width_id' => 1,
            'ratio' => 65, 'diameter' => 24,
            'tyre_load_id' => 7, 'tyre_speed_class_id' => 7,
            'regroovable' => true, 'mileage' => 100000,
            'tread_depth_i' => 18, 'tread_depth_m' => 19, 'tread_depth_o' => 33,
            'location_id' => 2, 'vehicle_id' => 4
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 6, 'axle_id' => 1, 'width_id' => 1,
            'ratio' => 65, 'diameter' => 24,
            'tyre_load_id' => 9, 'tyre_speed_class_id' => 8,
            'regroovable' => true, 'mileage' => 123456,
            'tread_depth_i' => 10, 'tread_depth_m' => 10, 'tread_depth_o' => 32,
            'location_id' => 2, 'vehicle_id' => 5
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 5, 'axle_id' => 1, 'width_id' => 1,
            'ratio' => 65, 'diameter' => 24,
            'tyre_load_id' => 4, 'tyre_speed_class_id' => 9,
            'regroovable' => true, 'mileage' => 1234567,
            'tread_depth_i' => 10, 'tread_depth_m' => 10, 'tread_depth_o' => 19,
            'location_id' => 2, 'vehicle_id' => 5
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 4, 'axle_id' => 2, 'width_id' => 1,
            'ratio' => 65, 'diameter' => 24,
            'tyre_load_id' => 1, 'tyre_speed_class_id' => 10,
            'regroovable' => true, 'mileage' => 2234567,
            'tread_depth_i' => 13, 'tread_depth_m' => 14, 'tread_depth_o' => 14,
            'location_id' => 2, 'vehicle_id' => 5
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 2, 'axle_id' => 2, 'width_id' => 1,
            'ratio' => 65, 'diameter' => 24,
            'tyre_load_id' => 5, 'tyre_speed_class_id' => 8,
            'regroovable' => true, 'mileage' => 2345677,
            'tread_depth_i' => 12, 'tread_depth_m' => 11, 'tread_depth_o' => 27,
            'location_id' => 3, 'vehicle_id' => 5
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 9, 'axle_id' => 2, 'width_id' => 1,
            'ratio' => 65, 'diameter' => 23,
            'tyre_load_id' => 4, 'tyre_speed_class_id' => 8,
            'regroovable' => true, 'mileage' => 7654321,
            'tread_depth_i' => 5, 'tread_depth_m' => 4, 'tread_depth_o' => 4,
            'location_id' => 3, 'vehicle_id' => 6
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 10, 'axle_id' => 2, 'width_id' => 1,
            'ratio' => 60, 'diameter' => 23,
            'tyre_load_id' => 6, 'tyre_speed_class_id' => 7,
            'regroovable' => true, 'mileage' => 3456777,
            'tread_depth_i' => 5, 'tread_depth_m' => 2, 'tread_depth_o' => 14,
            'location_id' => 4, 'vehicle_id' => 6
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 10, 'axle_id' => 3, 'width_id' => 1,
            'ratio' => 60, 'diameter' => 23,
            'tyre_load_id' => 6, 'tyre_speed_class_id' => 7,
            'regroovable' => true, 'mileage' => 309832,
            'tread_depth_i' => 9, 'tread_depth_m' => 0, 'tread_depth_o' => 12,
            'location_id' => 4, 'vehicle_id' => 6
        ]);
        DB::table($this->tableName)->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'model_id' => 8, 'axle_id' => 3, 'width_id' => 1,
            'ratio' => 55, 'diameter' => 23,
            'tyre_load_id' => 6, 'tyre_speed_class_id' => 9,
            'regroovable' => true, 'mileage' => 145834,
            'tread_depth_i' => 7, 'tread_depth_m' => 8, 'tread_depth_o' => 19,
            'location_id' => 1, 'vehicle_id' => 6
        ]);
//        DB::table($this->tableName)->insert([
//            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
//            'model_id' => , 'axle_id' => , 'width_id' => ,
//            'ratio' => 80, 'diameter' => 295,
//            'tyre_load_id' => 152, 'tyre_speed_class_id' => 1,
//            'regroovable' => true, 'mileage' => 1,
//            'tread_depth_i' => 7, 'tread_depth_m' => 7, 'tread_depth_o' => 7,
//            'location_id' => 1, 'vehicle_id' => 0
//        ]);
//        DB::table($this->tableName)->insert([
//            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
//            'model_id' => , 'axle_id' => , 'width_id' => ,
//            'ratio' => , 'diameter' => ,
//            'tyre_load_id' => , 'tyre_speed_class_id' => ,
//            'regroovable' => true, 'mileage' => 1,
//            'tread_depth_i' => 7, 'tread_depth_m' => 7, 'tread_depth_o' => 7,
//            'location_id' => 1, 'vehicle_id' => 0
//        ]);
    }
}
