<?php

namespace TyreDB;

use Illuminate\Database\Eloquent\Model;

class TyreLoadIndex extends Model
{
    protected $timestamps = true;
    protected $table = 'tyre_load_indices';
    protected $fillable = [
        'index', 'load'
    ];



}
