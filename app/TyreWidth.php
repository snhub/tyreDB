<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class TyreWidth extends Model
{
    //protected $table = 'tyre_widths';
    protected $fillable = [
        'width'
    ];


    public function tyre() {
        $this->hasMany('TyreDB\Tyre');
    }

}
