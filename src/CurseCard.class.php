<?php
namespace fdask\Munchkin;

/**
* a curse card
**/
class CurseCard extends DoorCard {
	/** constants indicating whether the card is one off, or sticky! **/
	const TYPE_CONTINUOUS = 'continuous';
	const TYPE_ONESHOT = 'oneshot';

	/** @var string sets the curse type **/
	public $curseType = null;

	/**
	* initializes a new CurseCard instance
	**/
	public function __construct() {
		parent::__construct();
	}

	/**
	* returns a string indicating the card type
	*
	* @return string
	**/
	public function getCardType() {
		return "CurseCard - " . parent::getCardType();
	}

	/**
	* sets the curseType property.  use one of the TYPE_X constants
	*
	* @param string $type
	**/
	public function setCurseType($type) {
		$this->curseType = $type;
	}

	/**
	* returns the curseType property
	*
	* @return string
	**/
	public function getCurseType() {
		return $this->curseType;
	}
}
