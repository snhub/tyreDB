<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class VehicleManufacturer extends Model
{
    //protected $table = 'vehicle_manufacturers';
    protected $fillable = [
        'name'
    ];


    public function vehicles() {
        $this->hasMany('TyreDB\VehicleModel');
    }

}
