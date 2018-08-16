<?php

namespace TyreDB\Http\Controllers;

use Artisan;

class DevelopmentToolsController extends Controller
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
	
	public function migrate()
	{
		$exitCode = Artisan::call('migrate:refresh', ['--force' => true,]);
		return view('developmentTools');
	}
	
	public function seed()
	{
		$exitCode = Artisan::call('db:seed', ['--force' => true,]);
		return view('developmentTools');
	}
	
	public function migrateAndSeed()
	{
		$exitCode = Artisan::call('migrate:refresh', ['--force' => true,]);
		$exitCode = Artisan::call('db:seed', ['--force' => true,]);
		return view('developmentTools');
	}
}
