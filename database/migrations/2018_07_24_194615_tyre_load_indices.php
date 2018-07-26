<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreLoadIndices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'tyre_load_indices';
        
        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->smallInteger('index');
            $table->decimal('load', 5, 1);
        });
        DB::statement("COMMENT ON TABLE $tableName IS 'Tragfähigkeitsindex'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($tableName);
    }
}
