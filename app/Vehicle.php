<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //protected $table = 'vehicles';
    protected $fillable = [
        'registration', 'nickname', 'model_id'
    ];

    public function model()
    {
        return $this->hasOne('App\VehicleModel');
    }

    public function tyre() {
        $this->hasMany('TyreDB\Tyre');
    }
}
