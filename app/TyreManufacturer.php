<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class TyreManufacturer extends Model
{
    //protected $table = 'tyre_manufacturers';
    protected $fillable = [
        'name'
    ];

    public function models() {
        $this->hasMany('TyreDB\TyreModel');
    }

}
