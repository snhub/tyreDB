<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreModels extends Migration
{
    private $tableName = 'tyre_models';
    
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
            $table->integer('manufacturer_id')->comment('tyre_manufacturers->id');
            $table->foreign('manufacturer_id')->references('id')->on('tyre_manufacturers');
        });
        DB::statement("COMMENT ON TABLE $this->tableName IS 'Modellbezeichnung'");
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
