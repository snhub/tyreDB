<?php

namespace TyreDB\Http\Controllers;

use Hamcrest\Util;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TyreDB\Tyre;
use TyreDB\Http\Controllers\ControllerUtils as Utils;
use TyreDB\Pagination;
use Debugbar;
use TyreDB\TyreLoadIndex;
use TyreDB\TyreManufacturer;
use TyreDB\TyreSpeedClazz;

class VehicleDataController extends Controller
{
	
	
	public function pageRequest(Request $request, $page)
	{
		if (isset($_REQUEST['page'])) {
			// param was set in the query string
			if (!empty($_REQUEST['page'])) {
			
			}
		}
	}
	
	public function newTyre()
	{
		$manufacturer = Utils::getSessionAttribute('newDatasetManufacturer');
		$model = Utils::getSessionAttribute('newDatasetModel');
		$width = Utils::getSessionAttribute('newDatasetMetricWidth');
		$ratio = Utils::getSessionAttribute('newDatasetMetricRatio');
		$rd = Utils::getSessionAttribute('newDatasetMetricRD');
		$diameter = Utils::getSessionAttribute('newDatasetMetricDiameter');
		$loadIndex = Utils::getSessionAttribute('newDatasetMetricLoadIndex');
		$speedClass = Utils::getSessionAttribute('newDatasetMetricSpeedClass');
		$axle = Utils::getSessionAttribute('newDatasetAxle');
		$operation = Utils::getSessionAttribute('newDatasetOperation');
		$location = Utils::getSessionAttribute('newDatasetLocation');
		$quality = Utils::getSessionAttribute('newDatasetQuality');
		$count = Utils::getSessionAttribute('newDatasetCount');
		$notes = Utils::getSessionAttribute('newDatasetNotes');
		
		$tyreModel = TyreModel::firstOrCreate(['name' => $model, 'manufacturer' => $manufacturer]);
		$tyreLoad = TyreLoadIndex::firstOrCreate(['load' => $loadIndex]);
		$tyreSpeed = TyreSpeedClazz::firstOrCreate();
	}
	
	public function show()
	{
		$manufacturers = TyreManufacturer::all();
		
		return view('vehicleData');
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
