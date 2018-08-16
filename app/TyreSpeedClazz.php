<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TyreSpeedClazz
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $clazz
 * @property $speed
 */
class TyreSpeedClazz extends Model
{
	protected $table = 'tyre_speed_classes';
	public $timestamps = false;
	protected $fillable = [
			'clazz', 'speed'
	];
	
	
	public function tyres()
	{
		$this->hasMany('TyreDB\Tyre');
	}
	
}
