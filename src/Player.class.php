#!/usr/bin/php
<?php
namespace fdask\Munchkin;

/*
* represents a player in the game
**/
class Player {
	/** constants representing the genders of a player **/
	const GENDER_MALE = 'male';
	const GENDER_FEMALE = 'female';
	const GENDER_NONE = 'none'; // added by Stick Figure card from Clerical Error expansion

	/** constants to identify which player deck one might want to access **/
	const DECK_HAND = 'deckhand';
	const DECK_PLAY = 'deckplay';

	/** @var string the name of the player **/
	public $name = null;

	/** @var string the gender of the player **/
	public $gender = null;

	/** @var integer the players level **/
	public $level = null;

	/** @var Deck representing the cards in a players hand **/
	public $cardHand = null;

	/** @var Deck representing the cards in front of the player **/
	public $cardPlay = null;

	/** @var boolean indicating the player has finished their turn **/
	public $doneTurn = null;

	/**
	* initializes a new player!
	**/
	public function __construct() {
		$this->setLevel(1);

		$this->cardHand = new Deck();
		$this->cardHand->setState(Card::STATE_FACEDOWN);

		$this->cardPlay = new Deck();
		$this->cardPlay->setState(Card::STATE_FACEUP);
	}

	/**
	* returns a string representation of the player
	*
	* @return string
	**/
	public function __toString() {
		$ret = "Player\n";
		$ret .= "Name: " . $this->getName() . "\n";
		$ret .= "Gender: " . $this->getGender() . "\n";

		// get the classes
		$classes = $this->getClasses();

		if (!empty($classes)) {
			$classRet = array();

			foreach ($classes as $class) {
				$classRet[] = $class->getName();
			}

			$ret .= "Class(es): " . implode(", ", $classRet) . "\n";
		} else {
			$ret .= "Class(es):\n";
		}

		// get teh races
		$races = $this->getRaces();

		if (!empty($races)) {
			$raceRet = array();

			foreach ($races as $race) {
				$raceRet[] = $race->getName();
			}

			$ret .= "Race(s): " . implode(", ", $raceRet) . "\n";
		} else {
			$ret .= "Race(s):\n";
		}

		$ret .= "Level: " . $this->getLevel() . "\n";
		$ret .= "Hand:\n";
		$ret .= $this->getCardHand() . "\n";
		$ret .= "In Play:\n";
		$ret .= $this->getCardPlay() . "\n";

		return $ret;
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
	* returns the name property
	*
	* @return string
	**/
	public function getName() {
		return $this->name;
	}

	/**
	* sets the gender propety
	*
	* @param string $gender
	**/
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	* returns the gender property
	*
	* @return string
	**/
	public function getGender() {
		return $this->gender;
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
	* adds an amount to the level property
	*
	* @param integer $amount
	* @return integer the new level
	**/
	public function addLevel($amount) {
		$this->level += $amount;

		return $this->level;
	}

	/**
	* removes an amount from the level property
	*
	* @param integer $amount
	* @return integer the new level
	**/
	public function removeLevel($amount) {
		// don't let the level fall below 1!
		$this->level = (($this->level - $amount) >= 1) ? ($this->level - $amount) : 1;

		return $this->level;
	}

	/**
	* returns the level property
	*
	* @return integer
	**/
	public function getLevel() {
		return $this->level;
	}

	/**
	* returns an amalgate combatStrength value
	*
	* @return integer
	**/
	public function getCombatStrength() {
		return 0;
	}

	/**
	* sets the cardHand property
	*
	* @param Deck $deck
	**/
	public function setCardHand(Deck $deck) {
		$this->cardHand = $deck;
	}

	/**
	* gets the cardHand property
	*
	* @return Deck
	**/
	public function getCardHand() {
		return $this->cardHand;
	}

	/**
	* sets the cardPlay property
	*
	* @param Deck $deck
	**/
	public function setCardPlay(Deck $deck) {
		$this->cardPlay = $deck;
	}

	/**
	* returns the cardPlay property
	*
	* @return Deck
	**/
	public function getCardPlay() {
		return $this->cardPlay;
	}

	/**
	* sets the doneTurn property
	* 
	* @param boolean $bool
	**/
	public function setDoneTurn($bool) {
		$this->doneTurn = $bool;
	}

	/**
	* gets the doneTurn property
	*
	* @return boolean
	**/
	public function getDoneTurn() {
		return $this->doneTurn;	
	}

	/**
	* checks to see if the user is already carrying a large item or not!
	*
	* @return boolean
	**/
	public function isCarryingBig() {
		$cardPlay = $this->cardPlay;

		foreach ($cardPlay as $card) {
			$size = $card->getSize();

			if ($size == EquipmentCard::SIZE_BIG) {
				return true;
			}
		}

		return false;
	}

	/**
	* returns a count indicating if the player has class card in play (returns the number of them!)
	*
	* @return integer
	**/
	public function getClassCount() {
		$cardPlay = $this->cardPlay;

		$ret = 0;

		if (!empty($cardPlay)) {
			foreach ($cardPlay as $card) {
				$cardType = get_class($card);

				if ($cardType == 'fdask\Munchkin\ClassCard') {
					$ret++;
				}
			}
		}

		return $ret;
	}

	/**
	* returns the players current classes if any!
	*
	* @return false|array
	**/
	public function getClasses() {
		$cardPlay = $this->cardPlay;

		if (!empty($cardPlay)) {
			$ret = array();

			foreach ($cardPlay as $card) {
				$cardType = get_class($card);

				if ($cardType == 'fdask\Munchkin\ClassCard') {
					$ret[] = $card;
				}
			}

			if (!empty($ret)) {
				return $ret;
			}
		}

		return false;	
	}

	/**
	* returns a count indicating if the player has race card in play (returns the number of them!)
	*
	* @return integer
	**/
	public function getRaceCount() {
		$cardPlay = $this->cardPlay;

		$ret = 0;

		if (!empty($cardPlay)) {
			foreach ($cardPlay as $card) {
				$cardType = get_class($card);

				if ($cardType == 'fdask\Munchkin\RaceCard') {
					$ret++;
				}
			}
		}

		return $ret;
	}

	/**
	* returns the players current races if any
	*
	* @return false|array
	**/
	public function getRaces() {
		$cardPlay = $this->cardPlay;

		if (!empty($cardPlay)) {
			$ret = array();

			foreach ($cardPlay as $card) {
				$cardType = get_class($card);

				if ($cardType == 'fdask\Munchkin\RaceCard') {
					$ret[] = $card;
				}
			}

			if (!empty($ret)) {
				return $ret;
			}
		}

		return false;	
	}

	/**
	* returns an array of all the gender constants
	*
	* @return array
	**/
	public static function getGenders() {
		return array(
			self::GENDER_MALE,
			self::GENDER_FEMALE,
			self::GENDER_NONE
		);
	}
}
