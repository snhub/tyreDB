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
        DB::table('vecicle_models')->insert([
            'name' => 'Actros', 'manufacturer_id' => 1
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'Atego', 'manufacturer_id' => 1
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'Super', 'manufacturer_id' => 2
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'Elephant', 'manufacturer_id' => 2
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'Cow', 'manufacturer_id' => 3
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'Heavy Loader', 'manufacturer_id' => 4
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'A', 'manufacturer_id' => 1
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'B', 'manufacturer_id' => 1
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'C', 'manufacturer_id' => 1
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'S', 'manufacturer_id' => 1
        ]);
        DB::table('vecicle_models')->insert([
            'name' => 'K', 'manufacturer_id' => 1
        ]);
    }
}
