<?php

namespace TyreDB\Http\Controllers;

use DebugBar\DebugBar;
use TyreDB\Tyre;
use TyreDB\TyreAxle;
use TyreDB\TyreLoadIndex;
use TyreDB\TyreManufacturer;
use TyreDB\TyreModel;
use TyreDB\TyreSpeedClazz;
use TyreDB\TyreWidth;

class DatabaseSeedController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}
	
	/**
	 *
	 */
	public function seedBridgestone()
	{
		$manu = TyreManufacturer::firstOrCreate(
				['name' => 'Bridgestone']);
		
		$axle = TyreAxle::firstOrCreate(['name' => 'Lenkachse']);
		$model = TyreModel::firstOrCreate(
				['name' => 'ECOPIA H-STEER 001'],
				['manufacturer_id' => $manu->id]);
		$width = TyreWidth::firstOrCreate(
				['width' => 295]);
		$ratio = 80;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 154],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'M'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 315]);
		$ratio = 80;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 156],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'L'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 315]);
		$ratio = 70;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 156],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'L'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		
		$model = TyreModel::firstOrCreate(
				['name' => 'R249 Ecopia'],
				['manufacturer_id' => $manu->id]);
		$width = TyreWidth::firstOrCreate(
				['width' => 295]);
		$ratio = 80;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 152],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'M'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 275]);
		$ratio = 70;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 148],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'M'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 315]);
		$ratio = 80;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 156],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'L'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 305]);
		$ratio = 70;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 150],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'M'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 315]);
		$ratio = 70;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 160],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'K'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 385]);
		$ratio = 65;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 160],
				['load' => 4500]);
		
		assert_options(ASSERT_ACTIVE, TRUE);
		assert_options(ASSERT_BAIL, true);
		assert_options(ASSERT_WARNING, true);
		$load = TyreLoadIndex::where('index', '4500')->get();
		//assert($load->load === 4500);
		
		
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'K'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 295]);
		$ratio = 60;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 150],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'L'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 385]);
		$ratio = 55;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 160],
				['load' => 0]);
		
		
		$load = TyreLoadIndex::where('index', '4500')->get();
		//assert($load->load === 4500);
		
		
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'K'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		
		
		$model = TyreModel::firstOrCreate(
				['name' => 'R249 EVO Ecopia'],
				['manufacturer_id' => $manu->id]);
		$width = TyreWidth::firstOrCreate(
				['width' => 315]);
		$ratio = 70;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 156],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'L'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 315]);
		$ratio = 60;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 154],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'L'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		$width = TyreWidth::firstOrCreate(
				['width' => 355]);
		$ratio = 50;
		$diameter = 22.5;
		$loadIndex = TyreLoadIndex::firstOrCreate(
				['index' => 156],
				['load' => 0]);
		$speedClass = TyreSpeedClazz::firstOrCreate(
				['clazz' => 'J'],
				['speed' => 0]);
		$tyre = new Tyre();
		$this->setBridgestoneConstants($tyre);
		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
		$tyre->save();
		
		
		
//		$axle = TyreAxle::firstOrCreate(['name' => 'Lenkachse']);
//		$model = TyreModel::firstOrCreate(
//				['name' => 'ECOPIA H-STEER 001'],
//				['manufacturer_id' => $manu->id]);
//		$width = TyreWidth::firstOrCreate(
//				['width' => 0]);
//		$ratio = 0;
//		$diameter = 0;
//		$loadIndex = TyreLoadIndex::firstOrCreate(
//				['index' => 0],
//				['load' => 0]);
//		$speedClass = TyreSpeedClazz::firstOrCreate(
//				['clazz' => 'M'],
//				['speed' => 0]);
//		$tyre = new Tyre();
//		$this->setBridgestoneConstants($tyre);
//		$this->setBridgestoneVariables($tyre, $model, $axle, $width, $diameter, $ratio, $loadIndex, $speedClass);
//		$tyre->save();
		
		
		
		return back();
	}
	
	private function setBridgestoneVariables(Tyre $tyre, TyreModel $model, TyreAxle $axle, TyreWidth $width, $diameter, $ratio, TyreLoadIndex $loadIndex, TyreSpeedClazz $speedClazz) {
		$tyre->model_id = $model->id;
		$tyre->axle_id = $axle->id;
		$tyre->width_id = $width->id;
		$tyre->diameter = $diameter;
		$tyre->ratio = $ratio;
		$tyre->tyre_load_id = $loadIndex->id;
		$tyre->tyre_speed_class_id = $speedClazz->id;
	}
	
	private function setBridgestoneConstants(Tyre $tyre) {
		$reg = true;
		$mil = 1;
		$tdi = 20;
		$tdm = 20;
		$tdo = 20;
		$loc = 2;
		$veh = NULL;
		$tyre->regroovable = $reg;
		$tyre->mileage = $mil;
		$tyre->tread_depth_i = $tdi;
		$tyre->tread_depth_m = $tdm;
		$tyre->tread_depth_o = $tdo;
		$tyre->location_id = $loc;
		$tyre->vehicle_id = $veh;
		
	}
}
