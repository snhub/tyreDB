<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    //protected $table = 'vehicle_types';
    protected $fillable = [
        'name'
    ];


    public function vehicles() {
        $this->hasMany('TyreDB\Vehicle');
    }

}
