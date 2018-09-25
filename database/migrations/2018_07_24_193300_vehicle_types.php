<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VehicleTypes extends Migration
{
    private $tableName = 'vehicle_types';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->char('abbreviation', 3);
        });
        //DB::statement("COMMENT ON TABLE $this->tableName IS '>Motorwagen<, >Anhänger<, usw.'");
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
