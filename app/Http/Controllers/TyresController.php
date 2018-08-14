<?php

namespace TyreDB\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TyreDB\Tyre;
use TyreDB\Http\Controllers\ControllerUtils as Utils;
use TyreDB\Pagination;
use Debugbar;

class TyresController extends Controller
{


    public function paginationigate(Request $request) {
        if (isset($_REQUEST['page']))
        {
            // param was set in the query string
            if(!empty($_REQUEST['page']))
            {

            }
        }
    }
    
    public function columnSort(Request $request) {
        if (isset($_REQUEST['column']))
        {
            // param was set in the query string
            if(!empty($_REQUEST['column']))
            {
                $column = $request->query('column', 'id');
                $column = self::$colProtectSQL[$column];
                $columnSortOrder = [];
                if (session()->has('columnSort')) {
                    $columnSortOrder = session()->get('columnSort');
                    if (empty($columnSortOrder[$column])) {
                        $columnSortOrder[$column] = 'asc';
                    } else {
                        $columnSortOrder[$column] = ($columnSortOrder[$column] === 'asc') ? 'desc' : 'asc';
                    }
                    session(['columnSort' => $columnSortOrder]);
                } else {
                    $columnSortOrder[$column] = 'asc';
                    session(['columnSort' => [$column => 'asc']]);
                }
                $tyres = Tyre::orderBy($column, $columnSortOrder[$column])->get();
                calculateTyreVariables($tyres);
                return view('tyres', ['tyres' => $tyres]);
            }
        }
        // $tyres = Tyre::all();
        // return view('tyres', ['tyres' => $tyres]);
        $this->show();
    }
    /**
     * Controller for all /tyres requests.
     * 
     */
    public function show()
    {
        // Log::channel('debug')->info('show', $_REQUEST);
        // Log::channel('slack')->info('hi');
        $tyres = [];
        $numTyres = Tyre::count();
        $datasetsPerPage = Utils::getSessionAttribute('datasetsPerPage', 10); //todo: 10 for development, prop. better 25
        $pagination = new Pagination($numTyres, $datasetsPerPage, 1);
        if (isset($_REQUEST['page']))
        {
            if(!empty($_REQUEST['page']))
            {
                $page = $_REQUEST['page'];
                // test for request parameter hack
                if (Utils::validateIntRequestParameter($page, 1, ceil($numTyres/$datasetsPerPage))) {
                    return view('welcome'); //todo: test request parameter hack
                }
                return $this->pageRequest($_REQUEST, $page);
            }
        }
        $columnSortOrder = ['id' => 'asc'];
        $column = 'id';
        if (isset($_REQUEST['column']))
        {
            if(!empty($_REQUEST['column']))
            {
                $column = $_REQUEST['column'];
                $column = Utils::$colProtectSQL[$column];
                if (session()->has('columnSortOrder')) {
                    $columnSortOrder = session()->get('columnSortOrder');
                    if (empty($columnSortOrder[$column])) {
                        $columnSortOrder[$column] = 'asc';
                    } else {
                        $columnSortOrder[$column] = ($columnSortOrder[$column] === 'asc') ? 'desc' : 'asc';
                    }
                    session(['columnSortOrder' => $columnSortOrder]);
                } else {
                    $columnSortOrder[$column] = 'asc';
                    session(['columnSortOrder' => [$column => 'asc']]);
                }
            }
        }
        $tyres = Tyre::orderBy($column, $columnSortOrder[$column])->skip(10)->take(10)->get();
        $this->calculateTyreVariables($tyres);
        return view('tyres', ['tyres' => $tyres, 'pagination' => $pagination]);
    }

    function calculateTyreVariables($tyres) {
        foreach($tyres as $tyre) {
            $tread_av = ControllerUtils::calculateTreadAverage(
                $tyre->tread_depth_i,
                $tyre->tread_depth_m,
                $tyre->tread_depth_o);
                $tyre->treadAvx = $tread_av;
            if($tyre->treadAvx > 6) {
                $tyre->quality = 'gut';
            } elseif ($tyre->treadAvx > 3) {
                $tyre->quality = 'mittel';
            } elseif ($tyre->treadAvx > 0.6) {
                $tyre->quality = 'schlecht';
            } else {
                $tyre->quality = 'Wechsel';
            }
        }
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
