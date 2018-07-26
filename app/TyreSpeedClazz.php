<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class TyreSpeedClazz extends Model
{
    protected $table = 'tyre_speed_classes';
    protected $fillable = [
        'clazz', 'speed'
    ];



}
