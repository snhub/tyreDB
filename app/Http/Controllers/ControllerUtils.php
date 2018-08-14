<?php

namespace TyreDB\Http\Controllers;

use PHPUnit\Framework\MockObject\Stub\Exception;
use Debugbar;

class ControllerUtils {
	
	
    static $colProtectSQL = [
        'index' => 'id',
        'manufacturer' => 'manufacturer_id',
        'model' => 'model_id',
        'axle' => 'axle_id',
        'width' => 'width_id',
        'ratio' => 'ratio',
        'rd' => 'rd',
        'diameter' => 'diameter',
        'load' => 'tyre_load_id',
        'speed' => 'tyre_speed_id',
        'regroovable' => 'regroovable',
        'mileage' => 'mileage',
        'treadAv' => 'treadAv',
        'location' => 'location_id',
        'vehicle' => 'vehicle_id'
	];
	
	static function validateIntRequestParameter($param, $low, $high) {
		if (filter_var($param, FILTER_VALIDATE_INT) === false) {
			if (($param < $low) && ($param > $high)) {
				return false;
			}
		}
		return true;
	}

	static function getSessionAttribute($name, $default) {

		if (session()->has($name)) {
			$attr = session()->get($name);
			if (empty($attr)) {
				$attr = $default;
			}
			return $attr;
		} else {
			session([$name => $default]);
		}
		switch ($name) {
			case 'columnSortOrder':
				
				break;

			case 'datasetsPerPage':
				break;
			
			default:
				// development catch
				throw new Exception('Unknown session attribute: "'.$name.'"');
				break;
		}
	}

	static function calculateTreadAverage($inner, $middle, $outer) {

		$av = ($inner +$middle +$outer)/3;
		return $av;
	}

}