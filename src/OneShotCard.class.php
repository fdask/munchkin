<?php
namespace fdask\Munchkin;

/**
* treasures that do something one shot 
**/
class OneShotCard extends TreasureCard {
	/**
	* initializes a new OneShotCard 
	**/
	public function __construct() {
		parent::__construct();
	}

	/**
	* returns a string representation of this item
	*
	* @return string
	**/
	public function __toString() {
		$ret = parent::__toString();

		return $ret;
	}

	/**
	* returns a string, identifying the type of card
	*
	* @return string
	**/
	public function getCardType() {
		return "OneShotCard - " . parent::getCardType();
	}
}
