<?php
namespace fdask\Munchkin;

/**
* defines a class to represent an individual munchkin card
**/
abstract class Card {
	/** constants representing the position of the card in the game **/
	const STATE_FACEDOWN = 'facedown';
	const STATE_FACEUP = 'faceup';

	/** @var string the name of the card **/
	public $name = null;

	/** @var string represents the state of the card (faceup or facedown) **/
	public $state = null;

	/** @var array representing the game states the given card can be played in **/
	public $playableStates = null;

	/**
	* initializes a new Card instance
	**/
	public function __construct() {
	}

	/**
	* returns a string representation of the card
	*
	* @return string
	**/
	public function __toString() {
		$ret = "Card: '" . $this->getName() . "' - Type: " . $this->getCardType() . " - State: " . $this->getState();

		return $ret;
	}

	/**
	* gets the name property
	*
	* @return string
	**/
	public function getName() {
		return $this->name;
	}

	/**
	* sets the name property
	*
	* @param string $name	
	**/
	public function setName($name) {
		$this->name = $name;
	}

	/**
	* sets the state property
	*
	* @param string $state
	**/
	public function setState($state) {
		$this->state = $state;
	}

	/**
	* returns the state property
	*
	* @return string
	**/
	public function getState() {
		return $this->state;
	}

	/**
	* sets the playableStates property
	*
	* @param array $array
	**/
	public function setPlayableStates($array) {
		$this->playableStates = $array;
	}

	/**
	* adds an entry to the playableStates property array
	*
	* @param string $state
	**/
	public function addPlayableState($state) {
		if (is_null($this->playableStates)) {
			$this->playableStates = array();
		}

		if (!in_array($state, $this->playableStates)) {
			$this->playableStates[] = $state;
		}
	}

	/**
	* returns the playableStates property
	*
	* @return array
	**/
	public function getPlayableStates() {
		return $this->playableStates;
	}

	/**
	* checks the playableStates array to see if it contains the passed parameter
	*
	* @param string $state
	* @return boolean
	**/
	public function isPlayableState($state) {
		return (!empty($this->playableStates)) ? in_array($state, $this->playableStates) : false;
	}

	/**
	* returns a string, identifying the type of card we have
	*
	* @return string
	**/
	public function getCardType() {
		// since this is an abstract class, we don't return anything!  subclasses must implement this
		return "";
	}
}
