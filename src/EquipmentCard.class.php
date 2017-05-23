<?php
namespace fdask\Munchkin;

/**
* a piece of wearable equipment
**/
class EquipmentCard extends TreasureCard {
	/** constants representing locations where equipment can be worn **/
	const LOCATION_FEET = 'feet';
	const LOCATION_ONEHAND = 'one hand';
	const LOCATION_TWOHANDS = 'two hands';
	const LOCATION_BODY = 'body';
	const LOCATION_HEAD = 'head';
	const LOCATION_NONE = 'none';

	/** constants representing two equipment sizes **/
	const SIZE_SMALL = 'small';
	const SIZE_BIG = 'big';
	
	/** constants representing the weapon type **/
	const TYPE_WAND = 'wand';
	const TYPE_POLE = 'pole';
	const TYPE_STAFF = 'staff';

	/** @var array list of any classes who cannot use this equipment **/
	public $classRestrictions = array();

	/** @var array **/
	public $classBonuses = array();

	/** @var array list of genders who cannot use this equipment **/
	public $genderRestrictions = array();

	/** @var array **/
	public $genderBonuses = array();

	/** @var array list of races who cannot use this equipment **/
	public $raceRestrictions = array();

	/** @var array **/
	public $raceBonuses = array();

	/** @var integer the bonus amount to apply to running away **/
	public $runAwayBonus = null;

	/** @var integer level bonus equipment provides **/
	public $bonus = null;

	/** @var string sets the size of the object **/
	public $size = null;

	/** @var string where the equipment is worn! **/
	public $location = null;

	/** @var string sets the equipment type **/
	public $equipmentType = null;

	/** @var boolean indicating if the item is equipped or just carried **/
	public $equipped = null;

	/**
	* initializes a new EquipmentCard instance
	**/
	public function __construct() {
		parent::__construct();	
	}

	/**
	* outputs a string representation of the equipment card
	*
	* @return string
	**/
	public function __toString() {
		$ret = parent::__toString();

		$ret .= " Bonus: " . $this->getBonus();
		$ret .= " Size: " . $this->getSize();
		$ret .= " Location: " . $this->getLocation();
		$ret .= " Equipped: " . ($this->getEquipped() ? 'true' : 'false');

		return $ret;
	}

	/**
	* returns the card type
	*
	* @return string
	**/
	public function getCardType() {
		return "Equipment - " . parent::getCardType();
	}

	/**
	* adds a single class to the class restrictions property
	*
	* @param string $class
	* @return boolean indicating whether the class restriction was added or not
	**/
	public function addClassRestriction($class) {
		if (is_null($this->classRestrictions)) {
			$this->classRestrictions = array();
		}

		if (!in_array($class, $this->classRestrictions)) {
			$this->classRestrictions[] = $class;

			return true;
		}

		return false;
	}

	/**
	* sets the classRestrictions property
	*
	* @param array $restrictions
	**/
	public function setClassRestrictions($restrictions) {
		$this->classRestrictions = $restrictions;
	}

	/**
	* returns the classRestrictions property
	*
	* @return array
	**/
	public function getClassRestrictions() {
		return $this->classRestrictions;
	}

	/**
	* adds a single gender to the gender restrictions property
	*
	* @param string $gender
	* @return boolean indicating whether the gender restriction was added or not
	**/
	public function addGenderRestriction($gender) {
		if (is_null($this->genderRestrictions)) {
			$this->genderRestrictions = array();
		}

		if (!in_array($gender, $this->genderRestrictions)) {
			$this->genderRestrictions[] = $gender;

			return true;
		}

		return false;
	}

	/**
	* sets the genderRestrictions property
	*
	* @param array $restrictions
	**/
	public function setGenderRestrictions($restrictions) {
		$this->genderRestrictions = $restrictions;
	}

	/**
	* returns the genderRestrictions property
	*
	* @return array
	**/
	public function getGenderRestrictions() {
		return $this->genderRestrictions;
	}

	/**
	* adds a single race to the race restrictions property
	*
	* @param string $race
	* @return boolean indicating whether the race restriction was added or not
	**/
	public function addRaceRestriction($race) {
		if (is_null($this->raceRestrictions)) {
			$this->raceRestrictions = array();
		}

		if (!in_array($race, $this->raceRestrictions)) {
			$this->raceRestrictions[] = $race;

			return true;
		}

		return false;
	}

	/**
	* sets the raceRestrictions property
	*
	* @param array $restrictions
	**/
	public function setRaceRestrictions($restrictions) {
		$this->raceRestrictions = $restrictions;
	}

	/**
	* returns the raceRestrictions property
	*
	* @return array
	**/
	public function getRaceRestrictions() {
		return $this->raceRestrictions;
	}

	/**
	* adds a bonus for a particular race
	*
	* @param string $race
	* @param integer $bonus
	**/
	public function addRaceBonus($race, $bonus) {
		if (is_null($this->raceBonuses)) {
			$this->raceBonuses = array();
		}

		$this->raceBonuses[$race] = $bonus;
	}

	/**
	* sets the raceBonuses property
	*
	* @param array $raceBonuses
	**/
	public function setRaceBonuses($raceBonuses) {
		$this->raceBonuses = $raceBonuses;
	}

	/**
	* returns the raceBonuses property
	*
	* @return array
	**/
	public function getRaceBonuses() {
		return $this->raceBonuses;
	}

	/**
	* sets the runAwayBonus property
	*
	* @param integer $bonus
	**/
	public function setRunAwayBonus($bonus) {
		$this->runAwayBonus = $bonus;
	}

	/**
	* returns the runAwayBonus property
	*
	* @return integer
	**/
	public function getRunAwayBonus() {
		return $this->runAwayBonus;
	}

	/**
	* sets the bonus property
	*
	* @param integer $bonus
	**/
	public function setBonus($bonus) {
		$this->bonus = $bonus;
	}

	/**
	* returns the bonus property
	*
	* @return integer
	**/
	public function getBonus() {
		return $this->bonus;
	}

	/**
	* sets the size property
	*
	* @param string $size
	**/
	public function setSize($size) {
		$this->size = $size;
	}

	/**
	* returns the size property
	*
	* @return string
	**/
	public function getSize() {
		return $this->size;
	}

	/**
	* sets the location property
	*
	* @param string $location use the LOCATION_X constants
	**/
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	* gets the location property
	*
	* @return string
	**/
	public function getLocation() {
		return $this->location;
	}

	/**
	* sets the equipmentType property
	*
	* @param string $type
	**/
	public function setEquipmentType($type) {
		$this->equipmentType = $type;
	}

	/**
	* gets the equipmentType property
	*
	* @return string
	**/
	public function getEquipmentType() {
		return $this->equipmentType;
	}

	/**
	* sets the equipped property
	*
	* @param boolean
	**/
	public function setEquipped($bool) {
		$this->equipped = $bool;
	}

	/**
	* toggles the state of the equipped property
	*
	* @return boolean new state of the equipped property
	**/
	public function toggleEquipped() {
		$this->equipped = !is_null($this->equipped) ? !$this->equipped : true;

		return $this->equipped;	
	}

	/**
	* gets the equipped property
	*
	* @return boolean
	**/
	public function getEquipped() {
		return $this->equipped;
	}
}
