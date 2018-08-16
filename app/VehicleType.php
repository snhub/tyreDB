<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehicleType
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $name
 */
class VehicleType extends Model
{
	//protected $table = 'vehicle_types';
	public $timestamps = false;
	protected $fillable = [
			'name'
	];
	
	
	public function vehicles()
	{
		$this->hasMany('TyreDB\Vehicle');
	}
	
}
