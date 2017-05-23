<?php
namespace fdask\Munchkin;

/**
* a door card
**/
abstract class DoorCard extends Card {
	/**
	* initializes a new DoorCard instance
	**/
	public function __construct() {
		parent::__construct();
	}

	/**
	* helper to identify the type of card 
	*
	* @return string
	**/
	public function getCardType() {
		return "Door Card";
	}
}
