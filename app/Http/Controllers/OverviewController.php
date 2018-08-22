<?php

namespace TyreDB\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TyreDB\Tyre;

class OverviewController extends Controller
{
    public function show()
    {
        return view('overview');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

}
