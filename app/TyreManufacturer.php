<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TyreManufacturer
 * @package TyreDB
 * @property $id
 * @property $name
 */
class TyreManufacturer extends Model
{
	//protected $table = 'tyre_manufacturers';
	public $timestamps = false;
	protected $fillable = [
			'name'
	];
	
	public function models()
	{
		$this->hasMany('TyreDB\TyreModel');
	}
	
}
