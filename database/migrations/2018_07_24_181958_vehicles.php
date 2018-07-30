<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehicles extends Migration
{
    private $tableName = 'vehicles';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->char('registration', 13);
            $table->string('nickname', 20);
            $table->integer('model_id')->comment('Tabelle "vehicle_models"');
        });
        DB::statement("COMMENT ON TABLE $this->tableName IS 'Fahrzeug mit Kennzeichen'");
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
