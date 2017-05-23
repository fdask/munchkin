<?php
namespace fdask\Munchkin;

/**
* cards that modify equipment!
**/
class EquipmentModCard extends TreasureCard {
	/** @var integer an adjustment to the level bonus the equipment provides **/
	public $bonusAdjustment = null;

	/** @var string size the equipment this attaches to, adjusts to! **/
	public $sizeAdjustment = null;

	/**
	* initializes a new EquipmentModCard
	**/
	public function __construct() {
	}

	/**
	* returns a cardType identifier string
	*
	* @return string
	**/
	public function getCardType() {
		return "EquipmentMod - " . parent::getCardType();
	}

	/**
	* sets the bonusAdjustment property
	*
	* @param integer $adjustment
	**/
	public function setBonusAdjustment($adjustment) {
		$this->bonusAdjustment = $adjustment;
	}

	/**
	* returns the bonusAdjustment property
	*
	* @return integer
	**/
	public function getBonusAdjustment() {
		return $this->bonusAdjustment;
	}

	/**
	* sets the sizeAdjustment property
	*
	* @param string $size
	**/
	public function setSizeAdjustment($size) {
		$this->sizeAdjustment = $size;
	}

	/**
	* returns the sizeAdjustment property
	*
	* @return string
	**/
	public function getSizeAdjustment() {
		return $this->sizeAdjustment;
	}
}
