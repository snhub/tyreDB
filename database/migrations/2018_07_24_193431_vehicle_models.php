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
            $table->integer('type_id')->unsigned()->comment('vehicle_types->id');
            $table->foreign('type_id')->references('id')->on('vehicle_types');
            $table->integer('manufacturer_id')->unsigned()->comment('vehicle_manufacturers->id');
            $table->foreign('manufacturer_id')->references('id')->on('vehicle_manufacturers');
            $table->tinyInteger('axles')->comment('Achszahl');
            $table->tinyInteger('tyres')->comment('Reifenzahl');
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
