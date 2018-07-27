<?php

use Illuminate\Database\Seeder;

class TyreLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tyre_locations')->insert([
            'name' => 'Montiert'
        ]);
        DB::table('tyre_locations')->insert([
            'name' => 'Lager'
        ]);
        DB::table('tyre_locations')->insert([
            'name' => 'Nachschneiden'
        ]);
        DB::table('tyre_locations')->insert([
            'name' => 'Runderneuerung'
        ]);
    }
}
