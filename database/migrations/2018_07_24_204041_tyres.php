<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tyres extends Migration
{
    private $tableName = 'tyres';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('code', 13)->comment('Barcode?')->default('-');
            $table->integer('model_id')->comment('tyre_models->id');
            $table->foreign('model_id')->references('id')->on('tyre_models');
            $table->integer('axle_id')->comment('tyre_axles->id');
            $table->foreign('axle_id')->references('id')->on('tyre_axles');
            $table->integer('width_id')->comment('tyre_widths->id');
            $table->foreign('width_id')->references('id')->on('tyre_widths');
            $table->tinyInteger('ratio')->comment('Verhältnis Höhe/Breite');
            $table->char('rd', 1)->comment('Radial/Diagonal')->default('R');
            $table->decimal('diameter', 3, 1)->comment('Felgendurchmesser');
            $table->integer('tyre_load_id')->comment('tyre_load_indices->id');
            $table->foreign('tyre_load_id')->references('id')->on('tyre_load_indices');
            $table->integer('tyre_speed_class_id')->comment('tyre_speed_classes->id');
            $table->foreign('tyre_speed_class_id')->references('id')->on('tyre_speed_classes');
            $table->boolean('regroovable')->default(true);
            $table->integer('mileage')->comment('Laufleistung')->default(10);
            $table->decimal('tread_depth_i', 3, 1)->comment('Profiltiefe innen');
            $table->decimal('tread_depth_m', 3, 1)->comment('Profiltiefe mitte');
            $table->decimal('tread_depth_o', 3, 1)->comment('Profiltiefe außen');
            $table->integer('location_id')->comment('tyre_locations->id');
            $table->foreign('location_id')->references('id')->on('tyre_locations');
            $table->integer('vehicle_id')->comment('vehicles->id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
        DB::statement("COMMENT ON TABLE $this->tableName IS 'Reifen'");
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
