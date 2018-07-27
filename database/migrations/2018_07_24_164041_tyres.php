<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tyres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'tyres';

        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('code', 13)->comment('Barcode?')->default('-');
            $table->integer('manufacturer_id')->comment('Tabelle: "manufacturers"');
            $table->integer('axle_id')->comment('Tabelle: "tyre_axles"');
            $table->integer('width_id')->comment('Tabelle: tyre_widths');
            $table->tinyInteger('ratio')->comment('Verhältnis Höhe/Breite');
            $table->char('rd', 1)->comment('Radial/Diagonal')->default('R');
            $table->decimal('diameter', 2, 1)->comment('Felgendurchmesser');
            $table->integer('tyre_load_id')->comment('Tabelle: "tyre_load_indices"');
            $table->integer('tyre_speed_class_id')->comment('Tabelle: "tyre_speed_classes"');
            $table->boolean('regroovable')->default(true);
            $table->integer('mileage')->comment('Laufleistung')->default(10);
            $table->decimal('tread_depth_i', 2, 1)->comment('Profiltiefe innen');
            $table->decimal('tread_depth_m', 2, 1)->comment('Profiltiefe mitte');
            $table->decimal('tread_depth_o', 2, 1)->comment('Profiltiefe außen');
            $table->integer('location_id')->comment('Tabelle: "tyre_locations"');
        });
        DB::statement("COMMENT ON TABLE $tableName IS 'Reifen'");
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
