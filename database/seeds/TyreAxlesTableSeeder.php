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
            'name' => 'Allachsbereifung'
        ]);
        DB::table('tyre_axles')->insert([
            'name' => 'Antriebsachse'
        ]);
        DB::table('tyre_axles')->insert([
            'name' => 'Lenkachse'
        ]);
        DB::table('tyre_axles')->insert([
            'name' => 'Trailer'
        ]);
    }
}
