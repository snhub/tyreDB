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
        DB::table('vecicle_Types')->insert([
            'name' => 'Motorwagen', 'abbreviation' => 'MW'
        ]);
        DB::table('vecicle_Types')->insert([
            'name' => 'Anhänger', 'abbreviation' => 'AH'
        ]);
    }
}
