<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VehicleModels extends Migration
{
    private $tableName = 'vehicle_models';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->comment('Modellbezeichnung');
            $table->integer('type_id')->comment('Tabelle "vehicle_types"');
            $table->integer('manufacturer_id')->comment('Tabelle "vehicle_manufacturers');
        });
        DB::statement("COMMENT ON TABLE $this->tableName IS 'Fahrzeug-Modellbezeichungen'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
