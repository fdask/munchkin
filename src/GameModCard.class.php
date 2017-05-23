#!/usr/bin/php
<?php
namespace fdask\Munchkin;

/**
* general game mod card 
**/
class GameModCard extends DoorCard {
	/** @var integer a number of additional treasures provided if the combat is won **/
	public $additionalTreasures = null;

	/** @var integer an amount added to a monsters level **/
	public $monsterLevelBonus = null;

	/** @var array specific monster level bonuses against classes **/
	public $monsterLevelClassBonus = null;

	/**
	* initializes a new GameModCard
	**/
	public function __construct() {
	}

	/**
	* sets the additionalTreasures property
	*
	* @param integer $int
	**/
	public function setAdditionalTreasures($int) {
		$this->additionalTreasures = $int;
	}

	/**
	* gets the additionalTreasures property
	*
	* @return integer
	**/
	public function getAdditionalTreasures() {
		return $this->additionalTreasures;
	}

	/**
	* sets the monsterLevelBonus property
	*
	* @param integer $int
	**/
	public function setMonsterLevelBonus($int) {
		$this->monsterLevelBonus = $int;
	}

	/**
	* returns the monsterLevelBonus property
	*
	* @return integer
	**/
	public function getMonsterLevelBonus() {
		return $this->monsterLevelBonus;
	}

	/**
	* sets the monsterLevelClassBonuses property
	*
	* @param array $array
	**/
	public function setMonsterLevelClassBonuses($array) {
		$this->monsterLevelClassBonuses = $array;
	}

	/**
	* adds a single key/value to the monsterLevelClassBonuses array
	*
	* @param string $class
	* @param integer $bonus
	**/
	public function addMonsterLevelClassBonus($class, $bonus) {
		if (is_null($this->monsterLevelClassBonuses)) {
			$this->monsterLevelClassBonuses = array();
		}

		$this->monsterLevelClassBonuses[$class] = $bonus;
	}

	/**
	* returns the monsterLevelClassBonuses property
	*
	* @return array
	**/
	public function getMonsterLevelClassBonuses() {
		return $this->monsterLevelClassBonuses;
	}

	/**
	* returns a string indicating the card type
	*
	* @return string
	**/
	public function getCardType() {
		return "GameModCard - " . parent::getCardType();
	}
}
