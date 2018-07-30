<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class TyreModel extends Model
{
    //protected $table = 'tyre_models';
    protected $fillable = [
        'name'
    ];

    public function manufacturer() {
        return $this->belongsTo('TyreDB\TyreManufacturer');
    }

    public function tyre() {
        return $this->hasMany('TyreDB\Tyre');
    }

    

}
