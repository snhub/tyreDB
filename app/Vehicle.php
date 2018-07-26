<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //protected $table = 'vehicles';
    protected $fillable = [
        'registration', 'model_id'
    ];



}
