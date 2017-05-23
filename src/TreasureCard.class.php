<?php
namespace fdask\Munchkin;

/**
* a treasure card
**/
abstract class TreasureCard extends Card {
	/** @var integer the value of this treasure card in gold **/
	public $goldValue = 0;

	/**
	* initializes a new TreasureCard instance 
	**/
	public function __construct() {
		parent::__construct();
	}

	/**
	* sets the goldValue property
	*
	* @param integer $value
	**/
	public function setGoldValue($value) {
		$this->goldValue = $value;
	}

	/**
	* returns the goldValue property
	*
	* @return integer
	**/
	public function getGoldValue() {
		return $this->goldValue;
	}

	/**
	* helper to identify the type of card 
	*
	* @return string
	**/
	public function getCardType() {
		return "Treasure Card";
	}
}
