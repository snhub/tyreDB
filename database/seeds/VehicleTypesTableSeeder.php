<?php

use Illuminate\Database\Seeder;

class VehicleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')->insert([
            'name' => 'Motorwagen', 'abbreviation' => 'MW'
        ]);
        DB::table('vehicle_types')->insert([
            'name' => 'Anhänger', 'abbreviation' => 'AH'
        ]);
    }
}
