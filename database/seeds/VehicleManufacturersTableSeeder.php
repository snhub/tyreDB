<?php

use Illuminate\Database\Seeder;

class VehicleManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_manufacturers')->insert([
            'name' => 'Mercedes'
        ]);
        DB::table('vehicle_manufacturers')->insert([
            'name' => 'M.A.N'
        ]);
        DB::table('vehicle_manufacturers')->insert([
            'name' => 'Iveco'
        ]);
        DB::table('vehicle_manufacturers')->insert([
            'name' => 'Renault'
        ]);
        DB::table('vehicle_manufacturers')->insert([
            'name' => 'Volvo'
        ]);
    }
}
