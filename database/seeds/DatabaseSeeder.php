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
        $this->call(UsersTableSeeder::class);
        $this->call(TyreLoadIndicesTableSeeder::class);
        $this->call(TyreLocationsTableSeeder::class);
        $this->call(TyreManufacturersTableSeeder::class);
        $this->call(TyreModelsTableSeeder::class);
        $this->call(TyreSpeedClassesTableSeeder::class);
        $this->call(TyreWidthsTableSeeder::class);
        $this->call(TyreAxlesTableSeeder::class);
        $this->call(VehicleModelsTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(VehicleTypesTableSeeder::class);
        $this->call(VehicleManufacturersTableSeeder::class);
        $this->call(TyresTableSeeder::class);
    }
}
