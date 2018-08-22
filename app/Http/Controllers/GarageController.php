<?php

namespace TyreDB\Http\Controllers;

use Illuminate\Http\Request;
use TyreDB\Vehicle;

class GarageController extends Controller
{
    public function show()
    {
        $vehicles=Vehicle::all();
        foreach($vehicles as $vehicle) {
            foreach($vehicle->tyres as $tyre) {
                $tread_av = $tyre->quality = (($tyre->tyre_tread_depth_i
                +$tyre->tyre_tread_depth_m
                +$tyre->tyre_tread_depth_o)/3);
                if($tread_av > 1.5) {
                    $tyre->quality = 'gut';
                } elseif ($tread_av > 1) {
                    $tyre->quality = 'mittel';
                } elseif ($tread_av > 0.6) {
                    $tyre->quality = 'schlecht';
                } else {
                    $tyre->quality = 'Wechsel';
                }
            }
        }
        
        return view('garage', ['vehicles' => $vehicles]);
    }

    public function columnSort(Request $request) {
        $column = $request->query('column', 'id');
        $vehicles = Vehicle::orderBy($column, 'asc')->get();
        return view('garage', ['vehicles' => $vehicles]);
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
    // public function index()
    // {
    //     $vehicles=DB::table('vehicles')->get();
    //     return view('vehicles', ['vehicles' => $vehicles]);
    // }
}
