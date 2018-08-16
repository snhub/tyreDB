<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TyreLoadIndex
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $index
 * @property $load
 */
class TyreLoadIndex extends Model
{
	protected $table = 'tyre_load_indices';
	public $timestamps = false;
	protected $fillable = [
			'index', 'load'
	];
	
	public function tyres()
	{
		$this->hasMany('TyreDB\Tyre');
	}
	
	
}
