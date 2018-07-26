<?php

use Illuminate\Database\Seeder;

class TyreManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Barkley'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Continental'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Dunlop'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Fulda'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Goodyear'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Michelin'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Rösler'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Taurus'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Michelin Remix'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Pneu Laurent'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Power Truck'
        ]);
        DB::table('tyre_manufacturers')->insert([
            'name' => 'Tigar'
        ]);
    }
}
