<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TyreManufacturers extends Migration
{
    private $tableName = 'tyre_manufacturers';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('name', 30);
        });
        DB::statement("COMMENT ON TABLE $tableName IS 'Reifenhersteller'");
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
