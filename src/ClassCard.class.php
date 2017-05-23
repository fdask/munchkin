<?php
namespace fdask\Munchkin;

/**
* a class
**/
class ClassCard extends DoorCard {
	/** constants representing the different classes **/
	const CLASS_WIZARD = 'wizard';
	const CLASS_THIEF = 'thief';
	const CLASS_CLERIC = 'cleric';
	const CLASS_WARRIOR = 'warrior';
	const CLASS_BARD = 'bard'; // added in the ClericalErrors expansion.

	/** @var string the class of this card **/
	public $class = null;

	/**
	* initializes a new ClassCard instance
	*
	* @param string $class should be one of the CLASS_X constants
	**/
	public function __construct($class) {
		$this->setClass($class);
		$this->setName(ucfirst($class));

		parent::__construct();
	}

	/**
	* returns a string indicating the card type
	*
	* @return string
	**/
	public function getCardType() {
		return "ClassCard - " . parent::getCardType();
	}

	/**
	* sets the class property
	*
	* @param string $class
	**/
	public function setClass($class) {
		$this->class = $class;
	}

	/**
	* gets the class property
	*
	* @return string
	**/
	public function getClass() {
		return $this->class;
	}

	/**
	* returns an array of all the class constants
	*
	* @return array
	**/
	public static function getClasses() {
		return array(
			self::CLASS_WIZARD,
			self::CLASS_THIEF,
			self::CLASS_CLERIC,
			self::CLASS_WARRIOR,
			self::CLASS_BARD
		);
	}
}
