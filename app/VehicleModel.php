<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    //protected $table = 'vehicle_models';
    protected $fillable = [
        'name', 'type_id'
    ];

    public function type()
    {
        return $this->belongsTo('TyreDB\VehicleType');
    }

    public function manufacturer() {
        return $this->belongsTo('TyreDB\VehicleManufacturer');
    }

    public function vehicles() {
        return $this->hasMany('TyreDB\Vehicle');
    }
}
