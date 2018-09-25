<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreWidths extends Migration
{
    private $tableName = 'tyre_widths';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('width', 4, 1);
        });
        //DB::statement("COMMENT ON TABLE $this->tableName IS 'Reifenbreite'");
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
