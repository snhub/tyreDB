<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //protected $table = 'vehicles';
    protected $fillable = [
        'registration', 'nickname', 'model_id', 'mileage'
    ];

    public function model()
    {
        return $this->belongsTo('TyreDB\VehicleModel');
    }

    public function tyres() {
        return $this->hasMany('TyreDB\Tyre');
    }
    
    public function type() {
        return $this->belongsTo('TyreDB\VehicleType');
    }

    
}
