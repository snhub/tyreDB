<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class TyreLoadIndex extends Model
{
    protected $table = 'tyre_load_indices';
    protected $fillable = [
        'index', 'load'
    ];

    public function tyres() {
        $this->hasMany('TyreDB\Tyre');
    }


}
