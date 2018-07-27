<?php

use Illuminate\Database\Seeder;

class TyreAxlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tyre_axles')->insert([
            'name' => 'Allachsbereifung', 'abbreviation' => 'AL'
        ]);
        DB::table('tyre_axles')->insert([
            'name' => 'Antriebsachse', 'abbreviation' => 'AA'
        ]);
        DB::table('tyre_axles')->insert([
            'name' => 'Lenkachse', 'abbreviation' => 'LA'
        ]);
        DB::table('tyre_axles')->insert([
            'name' => 'Trailer', 'abbreviation' => 'AH'
        ]);
    }
}
