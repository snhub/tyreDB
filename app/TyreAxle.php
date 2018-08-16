<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TyreAxle
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $name
 */
class TyreAxle extends Model
{
	//protected $table = 'tyre_axles';
	public $timestamps = false;
	protected $fillable = [
			'name'
	];
	
	public function tyre()
	{
		$this->hasMany('TyreDB\Tyre');
	}
	
}
