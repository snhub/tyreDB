<?php

namespace TyreDB\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TyreDB\Tyre;

class TyresController extends Controller
{
    public function show()
    {
        $tyres=Tyre::all();
        foreach($tyres as $tyre) {
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

        return view('tyres', ['tyres' => $tyres]);
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
        return view('tyres', ['tyres' => $tyres]);
    }
}
