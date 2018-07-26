<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreAxles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'tyre_axles';
        
        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('name', 20);
        });
        DB::statement("COMMENT ON TABLE $tableName IS 'Achse'");
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
