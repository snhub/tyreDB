<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TyreWidth
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $width
 */
class TyreWidth extends Model
{
	//protected $table = 'tyre_widths';
	public $timestamps = false;
	protected $fillable = [
			'width'
	];
	
	
	public function tyre()
	{
		$this->hasMany('TyreDB\Tyre');
	}
	
}
