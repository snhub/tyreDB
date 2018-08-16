<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tyre
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $code
 * @property $model_id
 * @property $axle_id
 * @property $width_id
 * @property $ratio
 * @property $rd
 * @property $diameter
 * @property $tyre_load_id
 * @property $tyre_speed_class_id
 * @property $regroovable
 * @property $mileage
 * @property $tread_depth_i
 * @property $tread_depth_o
 * @property $tread_depth_m
 * @property $location_id
 * @property $vehicle_id
 */
class Tyre extends Model
{
    //protected $table = 'tyres';
    protected $fillable = [
        'code',
        'model_id',
        'axle_id',
        'width_id',
        'ratio',
        'rd',
        'diameter',
        'tyre_load_id',
        'tyre_speed_class_id',
        'regroovable',
        'mileage',
        'tread_depth_i',
        'tread_depth_m',
        'tread_depth_o',
        'location_id',
        'vehicle_id'
    ];

    public $quality;

    public function model()
    {
        return $this->belongsTo('TyreDB\TyreModel');
    }

    public function axle()
    {
        return $this->belongsTo('TyreDB\TyreAxle');
    }

    public function width()
    {
        return $this->belongsTo('TyreDB\TyreWidth');
    }

    public function loadIndex()
    {
        return $this->belongsTo('TyreDB\TyreLoadIndex', 'tyre_load_id', 'id', 'tyre_load_indices');
    }

    public function speedClazz()
    {
        return $this->belongsTo('TyreDB\TyreSpeedClazz', 'tyre_speed_class_id', 'id', 'tyre_speed_class');
    }
    
    public function location()
    {
        return $this->belongsTo('TyreDB\TyreLocation');
    }
    
    public function vehicle()
    {
        return $this->belongsTo('TyreDB\Vehicle');
    }

    public $treadAvx = 0;

    public function treadAv() {
        return number_format($this->treadAvx, 1);
    }

    public function mileage() {
        return number_format($this->mileage);
    }
    
    public function createDate() {
    	return date('d-m-Y', strtotime($this->created_at));
    }

}
