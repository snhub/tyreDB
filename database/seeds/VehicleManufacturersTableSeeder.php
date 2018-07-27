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
        DB::table('vecicle_manufacturers')->insert([
            'name' => 'Mercedes'
        ]);
        DB::table('vecicle_manufacturers')->insert([
            'name' => 'M.A.N'
        ]);
        DB::table('vecicle_manufacturers')->insert([
            'name' => 'Iveco'
        ]);
        DB::table('vecicle_manufacturers')->insert([
            'name' => 'Renault'
        ]);
        DB::table('vecicle_manufacturers')->insert([
            'name' => 'Volvo'
        ]);
    }
}
