<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    //protected $table = 'vehicle_models';
    protected $fillable = [
        'name', 'type_id'
    ];



}
