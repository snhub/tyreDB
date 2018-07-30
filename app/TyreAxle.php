<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class TyreAxle extends Model
{
    //protected $table = 'tyre_axles';
    protected $fillable = [
        'name'
    ];

    public function tyre() {
        $this->hasMany('TyreDB\Tyre');
    }

}
