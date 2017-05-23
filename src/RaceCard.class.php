<?php
namespace fdask\Munchkin;

/**
* a race
**/
class RaceCard extends DoorCard {
	/** constants representing the different race types **/
	const RACE_HUMAN = 'human';
	const RACE_ELF = 'elf';
	const RACE_DWARF = 'dwarf';
	const RACE_HALFLING = 'halfling';
	const RACE_GNOME = 'gnome'; // added in the clerical errors expansion
	const RACE_ORC = 'orc'; // added in the clerical errors expansion

	/** @var string sets the race of this card **/
	public $race = null;

	/** @var integer a modifier to a run away roll **/
	public $runAwayModifier = null;

	/** @var boolean when true, this race collects a level when assisting in a winning combat **/
	public $combatAssistLevelUp = null;

	/**
	* initializes a new RaceCard instance
	* 
	* @param string $race
	**/
	public function __construct($race) {
		$this->setRace($race);
		$this->setName(ucfirst($race));

		parent::__construct();
	}

	/**
	* returns a string indicating the card type
	*
	* @return string
	**/
	public function getCardType() {
		return "RaceCard - " . parent::getCardType();
	}

	/**
	* sets the race property
	*
	* @param string $race
	**/
	public function setRace($race) {
		$this->race = $race;
	}

	/** 
	* returns the race property
	*
	* @return string
	**/
	public function getRace() {
		return $this->race;
	}

	/**
	* sets the runAwayModifier property
	*
	* @param integer $mod
	**/
	public function setRunAwayModifier($mod) {
		$this->runAwayModifier = $mod;
	}

	/**
	* gets the runAwayModifier property
	*
	* @return integer
	**/
	public function getRunAwayModifier() {
		return $this->runAwayModifier;
	}

	/**
	* sets the combatAssistLevelUp property
	*
	* @param boolean $bool
	**/
	public function setCombatAssistLevelUp($bool) {
		$this->combatAssistLevelUp = $bool;
	}

	/**
	* gets the combatAssistLevelUp property
	*
	* @return boolean
	**/
	public function getCombatAssistLevelUp() {
		return $this->comatAssistLevelUp;
	}

	/**
	* returns an array of all the race constants
	*
	* @return array
	**/
	public static function getRaces() {
		return array(
			self::RACE_HUMAN,
			self::RACE_ELF,
			self::RACE_DWARF,
			self::RACE_HALFLING,
			self::RACE_GNOME,
			self::RACE_ORC
		);
	}
}
