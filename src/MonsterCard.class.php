<?php
namespace fdask\Munchkin;

/**
* a monster card
**/
class MonsterCard extends DoorCard {
	/** constants to identify special monster classes **/
	const MONSTERTYPE_UNDEAD = 'undead';

	/** @var integer number of treasures the monster is worth **/
	public $treasures = 0;

	/** @var integer level of the monster **/
	public $level = 0;

	/** @var integer number of levels the monster is worth **/
	public $levels = 0;

	/** @var string type of monster this is **/
	public $monsterType = null;

	/** @var boolean indicating whether runAway is automatic from this monster **/
	public $runAwayAutomatic = null;

	/** @var integer added to the normal run away roll, for all players **/
	public $runAwayAdjustment = null;

	/** @var array adjustments to combat strength of combatant races **/
	public $combatRaceAdjustments = null;

	/** @var array adjustments to the combat strength of combatant classes **/
	public $combatClassAdjustments = null;

	/** @var array adjustments to the combat strength of combatant genders **/
	public $combatGenderAdjustments = null;

	/** @var array victory gives additional levels to these classes **/
	public $levelsClassBonuses = null;

	/** @var array victory gives additional levels to these races **/
	public $levelsRaceBonuses = null;

	/** @var array vitory gives additional levels to these genders **/
	public $levelsGenderBonuses = null;

	/**
	* initializes a new MonsterCard instance
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
		return "MonsterCard - " . parent::getCardType();
	}

	/**
	* sets the treasures property
	*
	* @param integer $treasures
	**/
	public function setTreasures($treasures) {
		$this->treasures = $treasures;
	}

	/**
	* returns the treasures property
	*
	* @return integer
	**/
	public function getTreasures() {
		return $this->treasures;
	}

	/**
	* sets the level property
	*
	* @param integer $level
	**/
	public function setLevel($level) {
		$this->level = $level;
	}

	/**
	* gets the level property
	*
	* @return integer
	**/
	public function getLevel() {
		return $this->level;
	}

	/**
	* sets the levels property
	*
	* @param integer $levels
	**/
	public function setLevels($levels) {
		$this->levels = $levels;
	}

	/**
	* gets the levels property
	*
	* @return integer
	**/
	public function getLevels() {
		return $this->levels;
	}

	/**
	* sets the levelsClassBonuses array 
	*
	* @param array $array
	**/
	public function setLevelsClassBonuses($array) {
		$this->levelsClassBonuses = $array;
	}

	/**
	* sets the monsterType property
	*
	* @param string $type
	**/
	public function setMonsterType($type) {
		$this->monsterType = $type;
	}

	/**
	* gets the monsterType property
	*
	* @return string
	**/
	public function getMonsterType() {
		return $this->monsterType;
	}

	/**
	* sets the runAwayAutomatic property
	*
	* @param boolean $bool
	**/
	public function setRunAwayAutomatic($bool) {
		$this->runAwayAutomatic = $bool;
	}

	/**
	* returns the runAwayAutomatic property
	*
	* @return boolean
	**/
	public function getRunAwayAutomatic() {
		return $this->runAwayAutomatic;
	}

	/**
	* sets the runAwayAdjustment property
	*
	* @param integer $adjust
	**/
	public function setRunAwayAdjustment($adjust) {
		$this->runAwayAdjustment = $adjust;
	}

	/**
	* returns the runAwayAdjustment property
	*
	* @return integer 
	**/
	public function getRunAwayAdjustment() {
		return $this->runAwayAdjustment;
	}

	/**
	* sets the combatRaceAdjustment properly
	*
	* @param array $array
	**/
	public function setCombatRaceAdjustments($array) {
		$this->combatRaceAdjustments = $array;
	}

	/**
	* adds a single combat adjustment based on race of combatant
	*
	* @param string $race
	* @param integer $adjustment
	**/
	public function addCombatRaceAdjustment($race, $adjustment) {
		if (is_null($this->combatRaceAdjustments)) {
			$this->combatRaceAdjustments = array();
		}

		$this->combatRaceAdjustments[$race] = $adjustment;
	}

	/**
	* gets the combatRaceAdjustments property 
	*
	* @return array
	**/
	public function getCombatRaceAdjustments() {
		return $this->combatRaceAdjustments;
	}

	/**
	* sets the combatClassAdjustment properly
	*
	* @param array $array
	**/
	public function setCombatClassAdjustments($array) {
		$this->combatClassAdjustments = $array;
	}

	/**
	* adds a single combat adjustment based on class of combatant
	*
	* @param string $class
	* @param integer $adjustment
	**/
	public function addCombatClassAdjustment($class, $adjustment) {
		if (is_null($this->combatClassAdjustments)) {
			$this->combatClassAdjustments = array();
		}

		$this->combatClassAdjustments[$class] = $adjustment;
	}

	/**
	* gets the combatClassAdjustments property 
	*
	* @return array
	**/
	public function getCombatClassAdjustments() {
		return $this->combatClassAdjustments;
	}

	/**
	* sets the combatGenderAdjustment properly
	*
	* @param array $array
	**/
	public function setCombatGenderAdjustments($array) {
		$this->combatGenderAdjustments = $array;
	}

	/**
	* adds a single combat adjustment based on gender of combatant
	*
	* @param string $gender
	* @param integer $adjustment
	**/
	public function addCombatGenderAdjustment($gender, $adjustment) {
		if (is_null($this->combatGenderAdjustments)) {
			$this->combatGenderAdjustments = array();
		}

		$this->combatGenderAdjustments[$gender] = $adjustment;
	}

	/**
	* gets the combatGenderAdjustments property 
	*
	* @return array
	**/
	public function getCombatGenderAdjustments() {
		return $this->combatGenderAdjustments;
	}

	/**
	* adds a single level class bonus
	*
	* @param string $class
	* @param integer $level
	**/
	public function addLevelsClassBonus($class, $level) {
		if (is_null($this->levelsClassBonus)) {
			$this->levelsClassBonus = array();
		}

		$this->levelsClassBonus[$class] = $level;
	}

	/**
	* returns the levelsClassBonuses property
	*
	* @return array
	**/
	public function getLevelsClassBonuses() {
		return $this->levelsClassBonuses;
	}

	/**
	* sets the levelsRaceBonuses array 
	*
	* @param array $array
	**/
	public function setLevelsRaceBonuses($array) {
		$this->levelsRaceBonuses = $array;
	}

	/**
	* adds a single level race bonus
	*
	* @param string $race
	* @param integer $level
	**/
	public function addLevelsRaceBonus($race, $level) {
		if (is_null($this->levelsRaceBonus)) {
			$this->levelsRaceBonus = array();
		}

		$this->levelsRaceBonus[$race] = $level;
	}

	/**
	* returns the levelsRaceBonuses property
	*
	* @return array
	**/
	public function getLevelsRaceBonuses() {
		return $this->levelsRaceBonuses;
	}

	/**
	* sets the levelsGenderBonuses array 
	*
	* @param array $array
	**/
	public function setLevelsGenderBonuses($array) {
		$this->levelsGenderBonuses = $array;
	}

	/**
	* adds a single level gender bonus
	*
	* @param string $gender
	* @param integer $level
	**/
	public function addLevelsGenderBonus($gender, $level) {
		if (is_null($this->levelsGenderBonus)) {
			$this->levelsGenderBonus = array();
		}

		$this->levelsGenderBonus[$gender] = $level;
	}

	/**
	* returns the levelsGenderBonuses property
	*
	* @return array
	**/
	public function getLevelsGenderBonuses() {
		return $this->levelsGenderBonuses;
	}
}
