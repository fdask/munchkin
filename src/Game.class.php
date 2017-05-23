#!/usr/bin/php
<?php
namespace fdask\Munchkin;

/**
* the main object
**/
class Game {
	// player picks a gender.
	// deal four of each cards to players (door/treasure) for eight cards.
	// race/class/useable item cards played by everyone now
	// roll to see who goes first.

	/** constants representing the players current turn phase **/
	const TURN_PHASE_KICK_OPEN_DOOR = 'kick open door';
	const TURN_PHASE_LOOK_OR_LOOT = 'look for trouble/loot the room';
	const TURN_PHASE_CHARITY = 'charity';

	/** constants representing the state of the game **/
	const STATE_COMBAT = 'combat';
	const STATE_POST_COMBAT = 'post-combat';
	const STATE_PRE_COMBAT = 'pre-combat';
	const STATE_REGULAR = 'regular';
	const STATE_STARTUP = 'startup';

	/** valid targets for a card play **/
	const CARD_TARGET_ITEM = 'item';
	const CARD_TARGET_MONSTER = 'monster';
	const CARD_TARGET_PLAYER = 'player';
	const CARD_TARGET_SELF = 'self';
	const CARD_TARGET_ETHER = 'ether';

	/** @var string a unique identifier representing this game **/
	public $id = null;

	/** @var string the state of the current game... either regular play, or combat **/
	public $state = null;

	/** @var array holding the player objects involved in the game **/
	public $players = null;

	/** @var integer represents a position in the players array for whose turn it is now **/
	public $turn = null;

	/** @var boolean indication if a player has fought this turn or not **/
	public $foughtThisTurn = false;

	/** @var integer tracks at what level a player needs to reach to win **/
	public $winningLevel = null;

	/** @var Deck instance containing the treasure cards **/
	public $treasureDeck = null;

	/** @var Deck instance containing the treasure discard pile **/
	public $treasureDeckDiscard = null;

	/** @var Deck instance containing the door cards **/
	public $doorDeck = null;

	/** @var Deck instance containing the door deck discard pile **/
	public $doorDeckDiscard = null;

	/**
	* initializes a new game
	**/
	public function __construct() {
		// generate a new identifier for the game
		$this->setId($this->generateId());
		$this->setState(self::STATE_STARTUP);
		$this->setWinningLevel(10);
	}

	/**
	* php magic method to output the class as a string
	*
	* @return string
	**/
	public function __toString() {
		$ret = "Game\n";
		$ret .= "Id: " . $this->getId() . "\n";
		$ret .= "Winning Level: " . $this->getWinningLevel() . "\n";
		$ret .= "State: " . $this->getState() . "\n";
		$ret .= "Players:\n";

		$players = $this->getPlayers();
		$turn = $this->getTurn();

		foreach ($players as $position => $player) {
			if ($position === $turn) {
				$ret .= "THIS PLAYERS TURN!\n";
			} 

			$ret .= $player . "\n";
		}

		return $ret;
	}

	/**
	* sets the id property
	*
	* @param string $id
	**/
	public function setId($id) {
		$this->id = $id;
	}

	/**
	* generates a unique identifier
	*
	* @return string
	**/
	public function generateId() {
		return uniqid();
	}

	/**
	* gets the id property
	*
	* @return string
	**/
	public function getId() {
		return $this->id;
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
	* sets the players property
	*
	* @param array $players
	**/
	public function setPlayers($players) {
		$this->players = $players;
	}

	/**
	* adds a single player object onto the players property
	*
	* @param Player $player
	**/
	public function addPlayer($player) {
		if (is_null($this->players)) {
			$this->players = array();
		}

		$this->players[] = $player;
	}

	/**
	* returns the players property
	* 
	* @return array
	**/
	public function getPlayers() {
		return $this->players;
	}

	/**
	* sets the foughtThisTurn property
	*
	* @param boolean $bool
	**/
	public function setFoughtThisTurn($bool) {
		$this->foughtThisTurn = $bool;
	}

	/**
	* gets the foughtThisTurn property
	*
	* @return boolean
	**/
	public function getFoughtThisTurn() {
		return $this->foughtThisTurn;
	}

	/**
	* sets the winningLevel property
	*
	* @param integer $level
	**/
	public function setWinningLevel($level) {
		$this->winningLevel = $level;
	}

	/**
	* returns the winningLevel property
	*
	* @return integer
	**/
	public function getWinningLevel() {
		return $this->winningLevel;
	}

	/**
	* sets the turn property
	*
	* @param integer $turn
	**/
	public function setTurn($turn) {
		$this->turn = $turn;
	}

	/**
	* advances/cycles the turn property
	*
	* @return Player
	**/
	public function nextTurn() {
		if (isset($this->players[($this->turn + 1)])) {
			$this->turn++;
		} else {
			$this->turn = 0;
		}

		return $this->players[$this->turn];
	}

	/**
	* returns the turn property
	*
	* @return integer
	**/
	public function getTurn() {
		return $this->turn;
	}

	/**
	* sets the treasureDeck property
	*
	* @param Deck $deck
	**/
	public function setTreasureDeck(Deck $deck) {
		$this->treasureDeck = $deck;
	}

	/**
	* gets the treasureDeck property
	*
	* @return Deck
	**/
	public function getTreasureDeck() {
		return $this->treasureDeck;
	}

	/**
	* sets the treasureDeckDiscard property
	*
	* @param Deck $deck
	**/
	public function setTreasureDeckDiscard(Deck $deck) {
		$this->treasureDeckDiscard = $deck;
	}

	/**
	* gets the treasureDeckDiscard property
	*
	* @return Deck
	**/
	public function getTreasureDeckDiscard() {
		return $this->treasureDeckDiscard;
	}

	/**
	* sets the doorDeck property
	*
	* @param Deck $deck
	**/
	public function setDoorDeck(Deck $deck) {
		$this->doorDeck = $deck;
	}

	/**
	* gets the doorDeck property
	*
	* @return Deck
	**/
	public function getDoorDeck() {
		return $this->doorDeck;
	}

	/**
	* sets the doorDeckDiscard property
	*
	* @param Deck $deck
	**/
	public function setDoorDeckDiscard(Deck $deck) {
		$this->doorDeckDiscard = $deck;
	}

	/**
	* gets the doorDeckDiscard property
	*
	* @return Deck
	**/
	public function getDoorDeckDiscard() {
		return $this->doorDeckDiscard;
	}

	// GAME LOGIC METHODS START HERE 

	/**
	* makes sure the conditions are properly set to start the game!
	*
	* @return boolean
	**/
	public function isGameReadyToStart() {
		// we need at least three players, no more than six
		// each player needs a name, and a gender chosen	
	}

	/**
	* deals out four cards from each deck, to each player
	**/
	public function initialDeal() {
		$players = $this->getPlayers();

		// deal four cards each of treasure deck
		for ($x = 0; $x < 4; $x++) {
			foreach ($players as $player) {
				$card = $this->getTreasureDeck()->getCard();

				$player->getCardHand()->addCard($card);
			}
		}

		// deal four cards each of door deck
		for ($x = 0; $x < 4; $x++) {
			foreach ($players as $player) {
				$card = $this->getDoorDeck()->getCard();

				$player->getCardHand()->addCard($card);
			}
		}
	}

	/**
	* randomly picks one of the players to go first!
	*
	* @return integer representing the position in the player array
	**/
	public function getRandomPlayer() {
		return array_rand($this->players);
	}

	/**
	* gets the options available to a player right now in the game
	*
	* @param integer $position the position of the player in the players array
	* @return false|string
	**/
	public function getPlayerOptions($position) {
		if (isset($this->players[$position])) {
			$gameState = $this->getState();
			$player = $this->players[$position];

			// check to see what cards the player can use
			$playableCards = $player->getCardHand()->getCardsWithPlayableState($gameState);

			$ret = "";

			if (!empty($playableCards)) {
				$ret .= "PLAY A CARD:\n";

				foreach ($playableCards as $card) {
					$ret .= $card . "\n";
				}
			}

			// equip->carry, carry->equip cards
			

			$ret .= "Ready To Play\n";

			return $ret;
		}	

		return false;
	}

	/**
	* someone wants to play a card!  comes from their hand, into active play... be it their own equip, a combat, or whatever.
	*
	* so we ask, who is playing a card.  what card are they playing, and where/what are they playing it to.
	* the first step is to check validity of the card play.
	*
	* @param integer $player the position in the players array
	* @param object $card the Card object being played
	* @param string $target (onto an item, onto a monster, into their 'carry', onto a player, onto themselves, into the ether (one shots with no target)
	* @param boolean indicating whether the play is successful or not
	**/
	public function playCard($player, $card, $target) {
		// does it have to be their turn for this card?
		// can the card be played during this game phase.
		// is the card being played onto the correct target 
		// any specific card restrictions preventing it's play
		// 
	}

	/**
	* moves a card from carried to equipped!
	*
	* @param integer $player
	* @param string $card
	* @param string $direction
	* @return boolean indicating whether the play is successful or not
	**/
	public function shiftCard($player, $card, $direction) {

	}

	/**
	* pulls a card from the given deck, matching the input, from the deck
	*
	* @param integer $player (integer representing the player number in the players array
	* @param string $deck Player::DECK_HAND or Player::DECK_PLAY
	* @param string $input either an integer, or a string matching a card name to draw
	* @return false|Card
	**/
	public function findCard($player, $deck, $input) {
		if (isset($this->players[$player])) {
			$player = $this->players[$player];

			if ($deck == Player::DECK_HAND) {
				$deck = $player->getCardHand();
			} else if ($deck == Player::DECK_PLAY) {
				$deck = $player->getCardPlay();
			}

			if ($deck && !empty($deck)) {
				if (is_numeric(trim($input))) {
					$cardPosition = (int)trim($input);

					$card = $deck->getCardByPosition($cardPosition);

					if (!$card) {
						echo "Invalid card number\n";
					}

					return $card;
				} else {
					$cardName = trim($input);

					// get the users hand and check to see if we can find a matching card!
					$card = $deck->getCardByName($cardName);				

					if (!$card) {
						// lets try a partial match!
						$cards = $deck->getCardByPartialName($cardName);

						if (!empty($cards)) {
							if (count($cards) > 1) {
								// two or more partial matches found!  Lets print them!
								echo "Ambiguous card name...\n";

								foreach ($cards as $card) {
									echo $card . "\n";
								}
							} else {
								$card = $cards[0];

								return $card;
							}
						} else {
							echo "Couldn't find a card with name '" . $cardName . "'\n";
						}
					} else {
						return $card;
					}
				}
			}
		}

		return false;
	}

	/**
	* for testing, we capture input from the cli and parse it here to figure out moves.
	*
	* @param string $input
	**/
	public function getMove($input) {
		// pick the player doing soething, with pX.  if thats the only bit, lists the players stat.
		// pc,cardName,target - play a card, with the name, on the given target.
		// sc,cardName|number - shift card to the opposite of what it is now
		// tc,cardName|number,player - offer to trade a user a card
		// cd,hand|play,cardName|number - gets a description of the card
		// dc,cardName|number
		// done - finish turn

		$bits = explode(":", $input);

		if (count($bits) >= 2) {
			if (preg_match("@p(\d)@", $bits[0], $matches)) {
				$player = (int)$matches[1] - 1;

				if (isset($this->players[$player])) {
					// expode the rest of the shit with commas
					$cbits = explode(",", $bits[1]);

					// parse the move.
					if (trim($cbits[0]) == "pc") {
						// we want to play a card!  next chunk should be the card name
						$card = $this->findCard($player, Player::DECK_HAND, $cbits[1]);

						if ($card) {
							echo "Found the card!\n";

							echo $card . "\n";

							// can the card be played during this phase.
							if (in_array($this->getState(), $card->getPlayableStates())) {
								// valid
								if (isset($cbits[2]) && trim($cbits[2]) != "") {
									$target = $cbits[2];

									if (in_array($target, self::getCardTargets())) {
										// now lets check to see if this card itself can be played on that target.	
										echo "Valid existing target of $target!\n";

										// if this is an equipment card, 
										$cardType = get_class($card);

										echo "cardType is $cardType\n";

										switch ($cardType) {
											case 'fdask\Munchkin\EquipmentCard':
												echo "We've got an equipment card!!\n";

												// get the equipment size.   user can only carry ONE big item at a time... unlesss...
												$size = $card->getSize();

												// get the users existing equipment.
												if ($size == EquipmentCard::SIZE_BIG && $this->players[$player]->isCarryingBig()) {
													echo "Player already has a carried big item!!  Play not allowed!\n";

													$this->players[$player]->getCardHand()->addCard($card);
												} else {
													echo "Ok!  Let's add the item to the in play hand!\n";

													$this->players[$player]->getCardPlay()->addCard($card);
												}

												break;
											case 'fdask\Munchkin\ClassCard':
												echo "We've got a class card!\n";

												// does the user already have a class card in play?  
												$cc = $this->players[$player]->getClassCount();

												// check if the player has superMunchkin or whatever
												$isSuperMunchkin = false;

												if ($cc === 0) {
													echo "Player is now class: " . $card->getName() . "\n";

													$this->players[$player]->getCardPlay()->addCard($card);
												} else if ($cc === 1 && !$isSuperMunchkin) {
													echo "Card cannot be played!  Already have a class card in play!\n";

													$this->players[$player]->getCardHand()->addCard($card);		
												} else if ($cc === 1 && $isSuperMunchkin) {
													echo "Second class card played!\n";

													$this->players[$player]->getCardPlay()->addCard($card);
												} else if ($cc === 2 && $isSuperMunchkin) {
													echo "Card cannot be played!  Already have two classes down!\n";

													$this->players[$player]->getCardHand()->addCard($card);		
												}

												break;
											case 'fdask\Munchkin\RaceCard':
												echo "We've got a race card!\n";

												// does the user already have a race card in play?  
												$cc = $this->players[$player]->getRaceCount();

												// check if the player has halfBreed or whatever
												$isHalfBreed = false;

												if ($cc === 0) {
													echo "Player is now race: " . $card->getName() . "\n";

													$this->players[$player]->getCardPlay()->addCard($card);
												} else if ($cc === 1 && !$isHalfBreed) {
													echo "Card cannot be played!  Already have a race card in play!\n";

													$this->players[$player]->getCardHand()->addCard($card);		
												} else if ($cc === 1 && $isHalfBreed) {
													echo "Second race card played!\n";

													$this->players[$player]->getCardPlay()->addCard($card);
												} else if ($cc === 2 && $isHalfBreed) {
													echo "Card cannot be played!  Already have two races down!\n";

													$this->players[$player]->getCardHand()->addCard($card);		
												}

												break;
											default:
												echo "Unhandled card type of $cardType\n";
										}
									} else {
										echo "Card target not valid.  Should be one of (" . implode(",", self::getCardTargets()) . ")\n";
									}
								} else {
									echo "Missing target for card play.  Should be one of (" . implode(",", self::getCardTargets()) . ")\n";
								}
							} else {
								echo "Game is in state " . $this->getState() . " but card can only be played in (" . implode(",", $card->getPlayableStates()) . ")\n";
							}
						} else {
							echo "Play a card!  pc,<card name>,<target>\n";	
						}
					} else if (trim($cbits[0]) == "hand") {
						// print the player info	
						echo $this->players[$player] . "\n";
					} else if (trim($cbits[0]) == "sc") {
						// shift a card in play from carried to equipped, or vice versa.	
						if (isset($cbits[1]) && trim($cbits[1]) != "") {
							$card = $this->findCard($player, Player::DECK_PLAY, trim($cbits[1]));

							if ($card) {

							}
						}	
					} else if (trim($cbits[0]) == "dc") {
						// discards a card in play!
						if (isset($cbits[1]) && trim($cbits[1]) != "") {
							$card = $this->findCard($player, Player::DECK_PLAY, trim($cbits[1]));

							if ($card) {
								// get the card type!  
								$cardType = get_class($card);

								switch ($cardType) {
									case 'fdask\Munchkin\ClassCard':
									case 'fdask\Munchkin\RaceCard':
										// races or classes can be discarded at ANY time!
										$this->discard($card);	

										break;
									case 'fdask\Munchkin\EquipmentCard':
										break;
									default:
										echo "Trying to discard unhandled cardType: $cardType\n";
								}
							}
						}	
					} else if (trim($cbits[0]) == "tc") {
						// trade a card.  must come from your in play items!
						if (isset($cbits[1]) && trim($cbits[1]) != "") {
							$card = $this->findCard($player, Player::DECK_PLAY, trim($cbits[1]));

							if ($card) {
								$cardType = get_class($card);

								if ($cardType != 'fdask\Munchkin\EquipmentCard') {
									echo "Only equipment cards can be traded, silly goose!\n";
								} else if (is_numeric(trim($cbits[2])) && isset($this->players[(int)trim($cbits[2])])) {
									$tradePlayer = (int)trim($cbits[2]) - 1;

									echo "Offering to trade card to player " . ($tradePlayer + 1) . " card:\n";
									echo $card . "\n";
								}
							} 
						}
					} else if (trim($cbits[0]) == "cd") {
						if (isset($cbits[1]) && trim($cbits[1]) != "") {
							switch (trim($cbits[1])) {
								case 'hand':
									$card = $this->findCard($player, Player::DECK_HAND, trim($cbits[2]));

									if ($card) {
										echo "Getting a description of a card!\n";
										echo $card . "\n";
									}
	
									break;
								case 'play':
									$card = $this->findCard($player, Player::DECK_PLAY, trim($cbits[2]));

									if ($card) {
										echo "Getting a description of a card!\n";
										echo $card . "\n";
									}

									break;
								default:
									// not sure where the card we want details on IS
									echo "Invalid location for card description! ({$cbits[1]})\n";
							}
						}
					} else if (trim($cbits[0]) == "done") {
						if ($this->getState() == self::STATE_STARTUP) {
							// if the game state is still in the first round, mark the player as done
							$this->players[$player]->setDoneTurn(true);	

							// check to see if all players are done
							$everyoneReady = true;

							foreach ($this->players as $player) {
								if (!$player->getDoneTurn()) {
									$everyoneReady = false;
								}
							}

							if ($everyoneReady) {
								// advance the game to actual gameplay!!
							}
						} else {
							// lets assume the player is ending their turn!  or going to the next phase, anyway.
						}
					} else {
						$this->turnHelp();
					}
				} else {
					echo "Invalid player number!\n";
				}
			} else {
				$this->turnHelp();
			}
		} else {
			$this->turnHelp();
		}
	}

	/**
	* outputs text describing possible moves
	***/
	public function turnHelp() {
		echo "Show hand/in play: pX:hand\n";
		echo "Play a card: pX:pc,cardName|number,target\n";
		echo "Shift a card already in play: pX:sc,cardName|number\n";
		echo "Discard a card: pX:dc,cardName|number\n";
		echo "Trade card to player: pX:tc,cardName|number,playerNum\n";
		echo "Get a description of a card: pX:cd,hand|play,cardName|number\n";
		echo "Finish turn: pX,done\n";
	}

	/**
	* helper that determines the type of card we have, and which pile it should be added too
	*
	* @param Card $card
	* @return boolean indicating success or failure of the discard
	**/
	public function discard($card) {
		if (is_subclass_of($card, 'fdask\Munchkin\TreasureCard')) {
			$this->treasureDeckDiscard->addCard($card);
		} else if (is_subclass_of($card, 'fdask\Munchkin\DoorCard')) {
			$this->doorDeckDiscard->addCard($card);
		} else {
			echo "Unknown card class!  " . $card->getCardType() . "\n";

			return false;
		}

		return true;
	}

	/**
	* returns an array of all the possible game state constants
	*
	* @return array
	**/
	public static function getGameStates() {
		return array(
			self::STATE_STARTUP,
			self::STATE_PRE_COMBAT,
			self::STATE_POST_COMBAT,
			self::STATE_COMBAT,
			self::STATE_REGULAR
		);
	}

	/**
	* returns an array of all possible card play targets
	*
	* @return array
	**/
	public static function getCardTargets() {
		return array(
			self::CARD_TARGET_ITEM,
			self::CARD_TARGET_MONSTER,
			self::CARD_TARGET_PLAYER,
			self::CARD_TARGET_SELF,
			self::CARD_TARGET_ETHER
		);
	}

	/**
	* generates a random number between 1 and $sides
	*
	* @param integer $sides
	**/
	public static function rollDie($sides = 6) {
		return rand(1, $sides);
	}
}
