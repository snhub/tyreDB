<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehicleModel
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $name
 * @property $type_id
 */
class VehicleModel extends Model
{
	//protected $table = 'vehicle_models';
	public $timestamps = false;
	protected $fillable = [
			'name', 'type_id'
	];
	
	public function type()
	{
		return $this->belongsTo('TyreDB\VehicleType');
	}
	
	public function manufacturer()
	{
		return $this->belongsTo('TyreDB\VehicleManufacturer');
	}
	
	public function vehicles()
	{
		return $this->hasMany('TyreDB\Vehicle');
	}
}
