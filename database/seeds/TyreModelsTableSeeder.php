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
            'name' => 'Super'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Longlife'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Crazy'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Durable'
        ]);
        DB::table('tyre_models')->insert([
            'name' => 'Soft'
        ]);
    }
}
