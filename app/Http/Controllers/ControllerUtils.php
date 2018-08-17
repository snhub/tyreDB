<?php

namespace TyreDB\Http\Controllers;

use PHPUnit\Framework\MockObject\Stub\Exception;
use Debugbar;

class ControllerUtils
{
	
	/**
	 * @var colProtectSQL
	 * Request attributes should not be the same as SQL data names.
	 */
	static $columnMask = [
			'index' => 'id',
			'created' => 'created_at',
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
	
	/**
	 * @param $name
	 * @param $expectedType
	 * Types:
	 * "boolean"
	 * "integer"
	 * "double" (aus historischen Gründen wird "double" im Fall eines float zurückgegeben, und nicht einfach float.
	 * "string"
	 * "array"
	 * "object"
	 * "resource"
	 * "resource (closed)" von PHP 7.2.0 an
	 * "NULL"
	 * "unknown type"
	 * @return request parameter
	 */
	static function getIntegerRequestParameter($name, $rangeFrom, $rangeTo) {
		assert(isset($name));
		assert(isset($rangeFrom));
		assert(isset($rangeTo));
		if (isset($_REQUEST[$name])) {
			if (!empty($_REQUEST[$name])) {
				$requestParam = $_REQUEST[$name];
				if (filter_var($requestParam, FILTER_VALIDATE_INT, ['options' => ['min_range' => $rangeFrom, 'max_range' => $rangeTo]])) {
					return $requestParam;
				}
			}
		}
		return null;
	}
	
	static function getDatasetsPerPageRequestParameter($name) {
		assert(isset($name));
		if (isset($_REQUEST[$name])) {
			$requestParam = $_REQUEST[$name];
			if (filter_var($requestParam, FILTER_VALIDATE_INT)) {
				if ($requestParam == 10 || $requestParam == 25 || $requestParam == 50 || $requestParam == 100) {
					return $requestParam;
				}
			}
		}
		return null;
	}
	
	static function getStringRequestParameter($name, $allowedValues) {
		assert(isset($name));
		assert(isset($allowedValues));
		if (isset($_REQUEST[$name])) {
			if (!empty($_REQUEST[$name])) {
				$requestParam = $_REQUEST[$name];
				$check = false;
				foreach ($allowedValues as $value) {
					if ($requestParam === $value) {
						$check = true;
					}
				}
				if ($check) {
					return $requestParam;
				}
			}
		}
		return null;
	}
	
	static function validateIntRequestParameter($param, $low, $high)
	{
		if (filter_var($param, FILTER_VALIDATE_INT) === false) {
			if (($param < $low) && ($param > $high)) {
				return false;
			}
		}
		return true;
	}
	
	static function setSessionAttribute($name, $value)
	{
		assert(isset($name));
		assert(isset($value));
		session([$name => $value]);
		assert(session()->get($name) === $value);
		return $value;
	}
	
	static function getSessionAttribute($name, $default)
	{
		assert(isset($name));
		assert(isset($default));
		$attr = null;
		if (!session()->has($name) || empty(session()->get($name))) {
			session([$name => $default]);
		}
		$attr = session()->get($name);
		assert(isset($attr));
		return $attr;
	}
	
	
	static function calculateTreadAverage($inner, $middle, $outer)
	{
		
		$av = ($inner + $middle + $outer) / 3;
		return $av;
	}
	
	
	static function calculateTyreVariables($tyres)
	{
		foreach ($tyres as $tyre) {
			$tread_av = ControllerUtils::calculateTreadAverage(
					$tyre->tread_depth_i,
					$tyre->tread_depth_m,
					$tyre->tread_depth_o);
			$tyre->treadAvx = $tread_av;
			if ($tyre->treadAvx > 6) {
				$tyre->quality = 'gut';
			} elseif ($tyre->treadAvx > 3) {
				$tyre->quality = 'mittel';
			} elseif ($tyre->treadAvx > 0.6) {
				$tyre->quality = 'schlecht';
			} else {
				$tyre->quality = 'Wechsel';
			}
			$tyre->metricString = ($tyre->width->width +0).'/'.$tyre->ratio.' '.$tyre->rd.' '.($tyre->diameter +0);
		}
	}
	
}