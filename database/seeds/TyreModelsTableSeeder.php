<?php

use Illuminate\Database\Seeder;

class TyreModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tyre_models')->insert([
            'name' => 'Super',
            'manufacturer_id' => '3'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Longlife',
            'manufacturer_id' => '1'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Crazy',
            'manufacturer_id' => '9'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Durable',
            'manufacturer_id' => '6'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Soft',
            'manufacturer_id' => '5'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Super 1',
            'manufacturer_id' => '3'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Longlife 1',
            'manufacturer_id' => '1'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Crazy 1',
            'manufacturer_id' => '9'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Durable 1',
            'manufacturer_id' => '6'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Soft 1',
            'manufacturer_id' => '5'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Durable 2',
            'manufacturer_id' => '6'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Soft 3',
            'manufacturer_id' => '5'
        ]);
    }
}
