<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TyreModel
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $name
 */
class TyreModel extends Model
{
	//protected $table = 'tyre_models';
	public $timestamps = false;
	protected $fillable = [
			'name', 'manufacturer_id'
	];
	
	public function manufacturer()
	{
		return $this->belongsTo('TyreDB\TyreManufacturer');
	}
	
	public function tyre()
	{
		return $this->hasMany('TyreDB\Tyre');
	}
	
	
}
