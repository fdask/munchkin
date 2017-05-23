<?php
namespace fdask\Munchkin;

/**
* a card that just lets a player gain a level
**/
class LevelUpCard extends OneShotCard {
	/**
	* initializes a new Level Up Card
	**/
	public function __construct() {
		parent::__construct();
	}

	/**
	* 
	**/
	public function applyToPlayer($player) {
	}

	/**
	* returns a string, identifying the type of card
	*
	* @return string
	**/
	public function getCardType() {
		return "LevelUpCard - " . parent::getCardType();
	}
}
