#!/usr/bin/php
<?php
// this is the main gameplay loop for Munchkin!
require 'vendor/autoload.php';

use fdask\Munchkin\Card;
use fdask\Munchkin\Deck;
use fdask\Munchkin\Game;
use fdask\Munchkin\Player;

// initialize our four decks.
$doorDeck = new Deck();
$doorDeck->setState(Card::STATE_FACEDOWN);
$doorDeck->setName("Door Deck");

$doorDeckDiscard = new Deck();
$doorDeckDiscard->setState(Card::STATE_FACEUP);
$doorDeckDiscard->setName("Door Deck Discard Pile");

$treasureDeck = new Deck();
$treasureDeck->setState(Card::STATE_FACEDOWN);
$treasureDeck->setName("Treasure Deck");

$treasureDeckDiscard = new Deck();
$treasureDeckDiscard->setState(Card::STATE_FACEUP);
$treasureDeckDiscard->setName("Treasure Deck Discard Pile");

// add the appropriate cards to our decks!
include 'src/OriginalDeck.inc.php';

// lets test:
$ddCards = $doorDeck->getCards();
echo "We have " . count($ddCards) . " cards in the " . $doorDeck->getName() . "\n";

$tdCards = $treasureDeck->getCards();
echo "We have " . count($tdCards) . " cards in the " . $treasureDeck->getName() . "\n";

// shuffle the decks!
$doorDeck->shuffleDeck();
$treasureDeck->shuffleDeck();

// lets instantiate the game!
$game = new Game();

// add the decks into the game
$game->setTreasureDeck($treasureDeck);
$game->setTreasureDeckDiscard($treasureDeckDiscard);
$game->setDoorDeck($doorDeck);
$game->setDoorDeckDiscard($doorDeckDiscard);

// lets add some players and add them to the game
$player1 = new Player();
$player1->setName("Player 1");
$player1->setGender(Player::GENDER_MALE);
$game->addPlayer($player1);

$player2 = new Player();
$player2->setName("Player 2");
$player2->setGender(Player::GENDER_MALE);
$game->addPlayer($player2);

$player3 = new Player();
$player3->setName("Player 3");
$player3->setGender(Player::GENDER_FEMALE);
$game->addPlayer($player3);

// start the game.
$game->initialDeal();

// pick a player to go first.
$game->setTurn($game->getRandomPlayer());

echo $game;

/* now lets get the options for player 1.
echo "Player 1 Turn Options:\n";
echo $game->getPlayerOptions(0);

// options for player 2
echo "Player 1 Turn Options:\n";
echo $game->getPlayerOptions(1);

// options for player 3.
echo "Player 3 Turn Options:\n";
echo $game->getPlayerOptions(2);
*/

while (1) {
	$input = readline("MOVE? ");

	if (trim($input) == "dump") {
		file_put_contents("GAME_DUMP", serialize($game));

		echo "Game dumped!\n";

		continue;
	} else if (trim($input) == "load") {
		if (file_exists("GAME_DUMP")) {
			$game = unserialize(file_get_contents("GAME_DUMP"));

			echo "Game loaded!\n";

			echo $game;
		} else {
			echo "Game file 'GAME_DUMP' not found!\n";
		}

		continue;
	}

	$game->getMove($input);

	readline_add_history($input);
}
