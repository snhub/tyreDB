<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreSpeedClasses extends Migration
{
    private $tableName = 'tyre_speed_classes';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->char('clazz', 2);
            $table->smallInteger('speed');
        });
        DB::statement("COMMENT ON TABLE $this->tableName IS 'Geschwindigkeitsklasse'");
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
