<?php

namespace TyreDB\Http\Controllers;

use Hamcrest\Util;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TyreDB\Tyre;
use TyreDB\Http\Controllers\ControllerUtils as Utils;
use TyreDB\Pagination;
use Debugbar;

class StockController extends Controller
{
	
	
	public function pageRequest(Request $request, $page)
	{
		if (isset($_REQUEST['page'])) {
			// param was set in the query string
			if (!empty($_REQUEST['page'])) {
			
			}
		}
	}
	
	public function show()
	{
		// Log::channel('debug')->info('show', $_REQUEST);
		// Log::channel('slack')->info('hi'); // works!
		$sessionSortColumn = Utils::getSessionAttribute('sortColumn', 'created_at');
		$sessionSortColumnOrder = Utils::getSessionAttribute('sortColumnOrder', 'asc');
		$sessionPaginationPage = Utils::getSessionAttribute('paginationPage', 1);
		$sessionDatasetsPerPage = Utils::getSessionAttribute('datasetsPerPage', 10); //todo: 10 for development, prop. better 25
		$sessionIsFilterOpen = Utils::getSessionAttribute('filterOpen', false);
		
		$numTyres = Tyre::count();
		$numPages = ceil($numTyres/$sessionDatasetsPerPage);
		
		$requestPage = Utils::getIntegerRequestParameter('page', 1, $numPages);
		$requestNavigate = Utils::getStringRequestParameter('navigate', ['forward', 'backward']);
		$requestColumnSort = Utils::getStringRequestParameter('column', array_keys(Utils::$columnMask));
		$requestDatasetsPerPage = Utils::getDatasetsPerPageRequestParameter('datasets');
		

		if (isset($requestDatasetsPerPage)) {
			$sessionDatasetsPerPage = Utils::setSessionAttribute('datasetsPerPage', $requestDatasetsPerPage);
			app('debugbar')->info($sessionDatasetsPerPage);
		}
		elseif (isset($requestColumnSort)) {
			$sessionSortColumn = Utils::setSessionAttribute('sortColumn', Utils::$columnMask[$requestColumnSort]);
		}
		elseif (isset($requestNavigate)) {
			if ($requestNavigate === 'forward') {
				if ($sessionPaginationPage < $numPages) { // we are not at the end
					$sessionPaginationPage = Utils::setSessionAttribute('paginationPage', $sessionPaginationPage +1);
				}
			}
			elseif ($requestNavigate === 'backward') {
				if ($sessionPaginationPage > 1) {
					$sessionPaginationPage = Utils::setSessionAttribute('paginationPage', $sessionPaginationPage -1);
				}
			}
		}
		elseif (isset($requestPage)) {
			$sessionPaginationPage = $requestPage;
		}
		
		$pagination = new Pagination($numTyres, $sessionDatasetsPerPage, $sessionPaginationPage);

		//$tyres = Tyre::orderBy($sessionSortColumn, $sessionSortColumnOrder)->skip(($sessionPaginationPage-1)*$sessionDatasetsPerPage)->take($sessionDatasetsPerPage)->get();
		$tyres = Tyre::orderBy($sessionSortColumn, $sessionSortColumnOrder)->paginate($sessionDatasetsPerPage);
		Utils::calculateTyreVariables($tyres);
		return view('stock', ['tyres' => $tyres, 'pagination' => $pagination, 'datasetsPerPage' => $sessionDatasetsPerPage]);
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
