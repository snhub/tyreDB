<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreLocations extends Migration
{
    private $tableName = 'tyre_locations';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->unique()->notNull();
        });
        DB::statement("COMMENT ON TABLE $this->tableName IS 'Aktueller Aufenthaltsort des Reifens: Montiert, Lager, zur Runderneuerung'");
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
