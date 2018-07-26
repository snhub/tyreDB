<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TyreLoadIndicesTableSeeder::class);
        $this->call(TyreLocationsTableSeeder::class);
        $this->call(TyreManufacturersTableSeeder::class);
        $this->call(TyreModelsTableSeeder::class);
        $this->call(TyreSpeedClassesTableSeeder::class);
        $this->call(TyresTableSeeder::class);
        $this->call(TyreTypesTableSeeder::class);
        $this->call(VehicleModelsTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(VehicleTypesTableSeeder::class);
        $this->call(VehicleManufacturersTableSeeder::class);
    }
}
