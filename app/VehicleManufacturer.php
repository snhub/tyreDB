<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehicleManufacturer
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $name
 */
class VehicleManufacturer extends Model
{
	//protected $table = 'vehicle_manufacturers';
	public $timestamps = false;
	protected $fillable = [
			'name'
	];
	
	
	public function vehicles()
	{
		$this->hasMany('TyreDB\VehicleModel');
	}
	
}
