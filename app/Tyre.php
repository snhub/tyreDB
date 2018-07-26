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



}
