<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicle
 * @package TyreDB
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $registration
 * @property $nickname
 * @property $model_id
 * @property $mileage
 */
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
