<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class TyreLocation extends Model
{
    //protected $table = 'tyre_locations';
    protected $fillable = [
        'name'
    ];


    public function tyre() {
        $this->hasMany('TyreDB\Tyre');
    }

}
