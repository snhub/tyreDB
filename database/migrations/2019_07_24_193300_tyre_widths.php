<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreWidths extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'tyre_widths';
        
        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->decimal('width', 3, 1);
        });
        DB::statement("COMMENT ON TABLE $tableName IS 'Reifenbreite'");
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
