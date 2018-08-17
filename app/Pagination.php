<?php

namespace TyreDB;

use Debugbar;

/**
 * Class Pagination
 * @package TyreDB
 * Used by view (tyres.blade)
 */
class Pagination {

	private $items, $itemsPerPage, $position;

	public $pages = [];
	public $backDisabled = '';
	public $forwardDisabled = '';

	function __construct($items, $itemsPerPage, $position)
	{
		$this->items = $items;
		$this->itemsPerPage = $itemsPerPage;
		$this->position = $position;

		$numPages = ceil($items/$itemsPerPage);
		if($numPages <= 5) {
			for($i = 1; $i <= $numPages; $i++) {
				$this->pages[$i] = ['number' => $i, 'disabled' => ''];
			}
			if($position == 1) {
				$this->backDisabled = 'disabled';
			} elseif($position == $numPages) {
				$this->forwardDisabled = 'disabled';
			}
			$this->pages[$position]['disabled'] = 'disabled';

		} else {

		}

	}

}