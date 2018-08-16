<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TyreLocation
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $name
 */
class TyreLocation extends Model
{
	//protected $table = 'tyre_locations';
	public $timestamps = false;
	protected $fillable = [
			'name'
	];
	
	
	public function tyre()
	{
		$this->hasMany('TyreDB\Tyre');
	}
	
}
