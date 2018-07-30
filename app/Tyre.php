<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class Tyre extends Model
{
    //protected $table = 'tyres';
    protected $fillable = [
        'code',
        'manufacturer_id',
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
        'location_id'
    ];

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
        return $this->belongsTo('TyreDB\TyreLoadIndex', 'id', 'id', 'tyre_load_index');
    }

    public function speedClazz()
    {
        return $this->belongsTo('TyreDB\TyreSpeedClazz', 'id', 'id', 'tyre_speed_class');
    }
    
    public function location()
    {
        return $this->belongsTo('TyreDB\TyreLocation');
    }

}
