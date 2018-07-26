<?php

use Illuminate\Database\Seeder;

class TyreSpeedClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'B',
            'speed' => 50
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'C',
            'speed' => 60
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'D',
            'speed' => 65
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'E',
            'speed' => 70
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'F',
            'speed' => 80
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'G',
            'speed' => 90
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'J',
            'speed' => 100
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'K',
            'speed' => 110
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'L',
            'speed' => 120
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'M',
            'speed' => 130
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'N',
            'speed' => 140
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'P',
            'speed' => 150
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'Q',
            'speed' => 160
        ]);
        DB::table('tyre_speed_classes')->insert([
            'clazz' => 'R',
            'speed' => 170
        ]);
    }
}
