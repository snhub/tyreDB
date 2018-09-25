<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreLoadIndices extends Migration
{
    private $tableName = 'tyre_load_indices';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('index')->unique()->nullable(false);
            $table->decimal('load', 5, 1)->nullable(false);
        });
        //DB::statement("COMMENT ON TABLE $this->tableName IS 'Tragfähigkeitsindex'");
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
