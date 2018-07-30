<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    //protected $table = 'vehicle_types';
    protected $fillable = [
        'name'
    ];


    public function vehicle() {
        $this->hasMany('TyreDB\Vehicle');
    }

}
