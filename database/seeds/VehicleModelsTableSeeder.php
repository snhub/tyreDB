<?php

use Illuminate\Database\Seeder;

class VehicleModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_models')->insert([
            'name' => 'Actros', 'manufacturer_id' => 1, 'type_id' => 1,
            'axles' => '3', 'tyres' => '6'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'Atego', 'manufacturer_id' => 1, 'type_id' => 1,
            'axles' => '2', 'tyres' => '4'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'Super', 'manufacturer_id' => 2, 'type_id' => 1,
            'axles' => '2', 'tyres' => '6'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'Elephant', 'manufacturer_id' => 2, 'type_id' => 2,
            'axles' => '3', 'tyres' => '6'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'Cow', 'manufacturer_id' => 3, 'type_id' => 2,
            'axles' => '2', 'tyres' => '6'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'Heavy Loader', 'manufacturer_id' => 4, 'type_id' => 1,
            'axles' => '3', 'tyres' => '8'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'A', 'manufacturer_id' => 1, 'type_id' => 1,
            'axles' => '2', 'tyres' => '4'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'B', 'manufacturer_id' => 1, 'type_id' => 2,
            'axles' => '2', 'tyres' => '4'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'C', 'manufacturer_id' => 1, 'type_id' => 2,
            'axles' => '3', 'tyres' => '6'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'S', 'manufacturer_id' => 1, 'type_id' => 2,
            'axles' => '2', 'tyres' => '4'
        ]);
        DB::table('vehicle_models')->insert([
            'name' => 'K', 'manufacturer_id' => 1, 'type_id' => 2,
            'axles' => '2', 'tyres' => '4'
        ]);
    }
}
