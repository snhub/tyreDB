<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehicles extends Migration
{
	private $tableName = 'vehicles';
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->char('registration', 13);
			$table->string('nickname', 20);
			$table->integer('mileage')->unsigned()->comment('Laufleistung');
			$table->integer('type_id')->unsigned()->comment('vehicle_types->id');
			$table->foreign('type_id')->references('id')->on('vehicle_types');
			$table->integer('model_id')->unsigned()->comment('vehicle_models->id');
			$table->foreign('model_id')->references('id')->on('vehicle_models');
		});
		//DB::statement("COMMENT ON TABLE $this->tableName IS 'Fahrzeug mit Kennzeichen'");
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
