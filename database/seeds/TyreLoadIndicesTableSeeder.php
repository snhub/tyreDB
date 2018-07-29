<?php

use Illuminate\Database\Seeder;

class TyreLoadIndicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tyre_load_indices')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            'index' => '144', 'load' => 2800
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '145', 'load' => 2900
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '146', 'load' => 3000
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '147', 'load' => 3075
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '148', 'load' => 3150
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '149', 'load' => 3250
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '150', 'load' => 3350
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '151', 'load' => 3450
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '152', 'load' => 3550
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '153', 'load' => 3650
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '154', 'load' => 3750
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '155', 'load' => 3875
        ]);
        DB::table('tyre_load_indices')->insert([
            'index' => '156', 'load' => 4000
        ]);
        
    }
}
