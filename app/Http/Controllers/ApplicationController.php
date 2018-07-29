<?php

namespace TyreDB\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    
    public function show()
    {
        $tyres=DB::table('tyres')->get();
        return view('application', ['tyres' => $tyres]);
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tyres=DB::table('tyres')->get();
        return view('application', ['tyres' => $tyres]);
    }
}
