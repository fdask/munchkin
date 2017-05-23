<?php
namespace fdask\Munchkin;

// original deck CARDS!  NO EXPANSIONS

$x = new OneShotCard();
$x->setName("Whine At The GM");
// go up a level
// cant use if you are currently the highest level, or tied for highest
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Boil An Anthill");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// go up a level
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Bribe GM With Food");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// go up a level
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Potion Of General Studliness");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// go up a level
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("1,000 Gold Pieces");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// go up a level
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Mutilate The Bodies");
// go up a level
$x->setPlayableStates(array(Game::STATE_POST_COMBAT));
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Invoke Obscure Rules");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// go up a level
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Convenient Addition Error");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// go up a level
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Loaded Die");
$x->setGoldValue(300);
// play after rolling the die.  pick any number you want.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Hoard");
// draw 3 more treasure cards immediately.  facedown if this card drawn facedown.  faceup otherwise.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Steal A Level");
// pick one player and take a level from them
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Kill The Hireling");
// card used only if a hireling is in play (anyones).  discard the hireling.
// go up a level
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Yuppie Water");
$x->setGoldValue(100);
// can only help elves
// +2 to each elf in the battle
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Electric Radioactive Acid Potion");
$x->setGoldValue(200);
// +5 to either side in a combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Cotion Of Ponfusion");
$x->setGoldValue(100);
// +3 to either side in a combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Potion Of Halitosis");
$x->setGoldValue(100);
// instantly kills Floating Nose, OR, +2 to either side
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Freezing Explosive Potion");
$x->setGoldValue(100);
// +3 to either side in combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Magic Missile");
$x->setGoldValue(300);
// +5 to either side in combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Potion Of Idiotic Bravery");
$x->setGoldValue(100);
// +2 to either side in combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Nasty-Tasting Sports Drink");
$x->setGoldValue(200);
// +2 to either side during combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Flaming Poison Potion");
$x->setGoldValue(100);
// +3 to either side during combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Sleep Potion");
$x->setGoldValue(100);
// +2 to either side in combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Pretty Balloons");
$x->setGoldValue(0);
// +5 to either side in combat
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Transferral Potion");
$x->setGoldValue(300);
// play during combat.  makes another player take your place in battle. (gets all treasure, rewards, etc)
// when battle is resolved, original player resumes, and may loot the room whether combat was lost or won
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Invisibility Potion");
$x->setGoldValue(200);
// use when your run away roll fails.  automatic escape.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Magic Lamp");
$x->setGoldValue(500);
// useable only on your turn
// makes a monster disappear... at any time, even if you failed a run away roll.   
// if monster was the only one being face, take it's treasure, but don't gain a level
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Friendship Potion");
$x->setGoldValue(200);
// use during combat.
// discard all monsters.  no treasure gained, but player may loot the room.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Pollymorph Potion");
$x->setGoldValue(1300);
// use during combat
// turns any monster into a parrot, which flies away, leaving treasure behind.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Instant Wall");
$x->setGoldValue(300);
// allows automatic escape, for one or two players, from any fight.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Flask Of Glue");
$x->setGoldValue(100);
// when someone successfully escapes combat, use this to cause them to have to re-roll escape.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Wand Of Dowsing");
$x->setGoldValue(1100);
// Go through the discard piles and take a card you want.
$treasureDeck->addCard($x);

// two of these
$x = new OneShotCard();
$x->setName("Wishing Ring");
$x->setGoldValue(500);
// cancels any curse.  play at any time.
$treasureDeck->addCard($x);
$treasureDeck->addCard($x);

$x = new GameModCard();
$x->setName("Out To Lunch");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// player facing the monster discards them, and takes two treasures immediately
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Intelligent");
$x->setMonsterLevelBonus(5);
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(1);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Help Me Out Here!");
// play while you are in combat
// optionally, discard something of your own
// take any one item from another player.  at the moment you take it, must cause you to win the fight
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Illusion");
// play during any combat
// discard any one monster in the combat, along with cards to mod it.
// replace with a monster card from your own hand
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Enraged");
$x->setMonsterLevelBonus(5);
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(1);
// not compatible with Very Depressed from Clerical Errors deck.
$doorDeck->addCard($x);

// three of these
$x = new GameModCard();
$x->setName("Wandering Monster");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// play with a monster from your hand, when anyone is in combat
// monster joins the one already fighting.   
// if combatants flee, roll each monster seperately, in order victim chooses
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Baby");
$x->setMonsterLevelBonus(-5);
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(-1);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Humongous");
$x->setMonsterLevelBonus(10);
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(2);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Ancient");
$x->setMonsterLevelBonus(10);
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(2);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Cheat!");
// play card with an item in play, or when you play an item from your hand.
// basically lets you use any item that would normally be illegal.
// attachs to the item and discards when item is discarded
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Divine Intervention");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// must be played as soon as the card is drawn
// all clerics immediately go up a level.  this CAN be the winning level
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Mate");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// an exact duplicate monster, with all bonsuses or penalties, appears!
// if defeated, go up a level for each monster, get treasure for each
$doorDeck->addCard($x);

// two of these
$x = new GameModCard();
$x->setName("Half-Breed");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// lets a player have TWO race cards in play, or just one, but only the positives.
$doorDeck->addCard($x);
$doorDeck->addCard($x);

// two of these
$x = new GameModCard();
$x->setName("Super Munchkin");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// may have two class cards in play, or just one, but only the positives
$doorDeck->addCard($x);
$doorDeck->addCard($x);

// three of each of these in the deck.
$x = new ClassCard(ClassCard::CLASS_WIZARD);
// discard up to 3 cards after rolling die to run away.  each one gives +1 bonus
// discard your whole hand (min 3 cards) to discard a monster and take it's treasure (dont gain a level).  other monsters fought normally
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

$x = new ClassCard(ClassCard::CLASS_THIEF);
// discard a card to backstab another player (-2 in combat).  only once per victim, per combat
// discard a card to try and steal a small item from another player.  4 or more success, otherwise lose a level
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

$x = new ClassCard(ClassCard::CLASS_CLERIC);
// when you draw cards face up, you can instaed take some or all from the top of the appropriate discard pile
// discard one card from your hand for each card drawn like this.
// discard up to 3 cards in combat against an undead.  each discard gives you +3.
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

$x = new ClassCard(ClassCard::CLASS_WARRIOR);
// discard up to three cards in combat, each one giving you +1.
// wins ties in combat
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

// three of these
$x = new RaceCard(RaceCard::RACE_ELF);
$x->setRunAwayModifier(1);
$x->setCombatAssistLevelUp(true);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

// three of these
$x = new RaceCard(RaceCard::RACE_HALFLING);
// sell one item each turn for double price (others are normal)
// if you fail your initial run away, you can discard a card and try again
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

// three of these
$x = new RaceCard(RaceCard::RACE_DWARF);
// carry any number of big items
// can have six cards in your hand
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Lose Your Class");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// discard class card if you have one.  two in play, pick one.  none?  lose a level.
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Lose The Footgear You Are Wearing");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// discard any footgear
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Truly Obnoxious Curse!  Lose The Item That Gives You The Biggest Bonus");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// discard the item that gives you the biggest bonus
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Lose The Headgear You Are Wearing");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// discard any headgear
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Chicken On Your Head");
$x->setCurseType(CurseCard::TYPE_CONTINUOUS);
$x->setPlayableStates(Game::getGameStates());
// -1 to all die rolls. 
// any curse or bad stuff removing headgear, will take chicken with it
$doorDeck->addCard($x);

// two of these
$x = new CurseCard();
$x->setName("Curse! Lose A Level");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// lose a level
$doorDeck->addCard($x);
$doorDeck->addCard($x);

// two of these
$x = new CurseCard();
$x->setName("Curse! Lose 1 Small Item");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
// choose one small item to discard.  can't be a big item
$x->setPlayableStates(Game::getGameStates());
$doorDeck->addCard($x);
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Duck Of Doom");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// lose two levels
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Lose The Armor You Are Wearing");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// discard any armor equipped
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Lose Your Race");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// discard any race card in play, and become human
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Lose 1 Big Item");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// discard one big item
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Income Tax");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// discard one item of your choice.
// every other play must discard item(s) totalling the same or more value.  if they can't, they lose all items and lose a level.
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Change Sex");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// sex is instantly reversed.  (gender)
// -5 to next combat.
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Lose Two Cards");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// player on left takes a card from victims hand.  so does player on right.
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Change Class");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// if player has no class, this does nothing
// otherwise, user discards their current class... goes through discard pile, adopting first class they find.
// if no class card is in the discard pile, they remain without one.
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Change Race");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// if player has no race, this does nothing
// otherwise, user discards their current race... goes through discard pile, adopting first race they find.
// if no race card is in the discard pile, they remain without one.
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Malign Mirror");
$x->setCurseType(CurseCard::TYPE_CONTINUOUS);
$x->setPlayableStates(Game::getGameStates());
// next fight only, only bonuses can come from armor.  
// curse can be removed via a wishing ring BEFORE the next fight
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Pit Bull");
$x->setLevel(2);
$x->setLevels(1);
$x->setTreasures(1);
// bad stuff, lose two levels
// automatic escape by dropping 'wand/pole/staff'
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Tongue Demon");
$x->setLevel(12);
$x->setLevels(1);
$x->setTreasures(3);
// bad stuff, lose two levels (three for elves)
// +4 against clerics.
// must discard one item (your choice) before combat
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Mr. Bones");
$x->setLevel(2);
$x->setLevels(1);
$x->setTreasures(1);
$x->setMonsterType(MonsterCard::MONSTERTYPE_UNDEAD);
// bad stuff, lose two levels.
// lose a level even if you flee
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Squidzilla");
$x->setLevel(18);
$x->setLevels(2);
$x->setTreasures(4);
$x->setCombatRaceAdjustments(array(RaceCard::RACE_ELF => -4));
// bad stuff.  you die!
// won't pursue anyone level 4 or below, EXCEPT elves
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Large Angry Chicken");
$x->setLevel(2);
$x->setLevels(1);
$x->setTreasures(1);
// gain an extra level if killed by fire
// bad stuff, lose a level
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Flying Frogs");
$x->setLevel(2);
$x->setLevels(1);
$x->setTreasures(1);
$x->setRunAwayAdjustment(-1);
// lose 2 levels if you are defeated.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Gelatinous Octahedron");
$x->setLevel(2);
$x->setLevels(1);
$x->setTreasures(1);
$x->setRunAwayAdjustment(1);
// bad stuff, drop all big items.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Plutonium Dragon");
$x->setLevel(20);
$x->setLevels(2);
$x->setTreasures(5);
// bad stuff, you die.
// won't pursue anyone one 5 or less in level.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Ghoulfiends");
$x->setLevel(8);
$x->setLevels(1);
$x->setTreasures(2);
// bad stuff, your level becomes equal to the lowest level of any character in play
// no items can help.  fight with level only
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Face Sucker");
$x->setLevel(8);
$x->setLevels(1);
$x->setTreasures(2);
$x->setCombatRaceAdjustments(array(RaceCard::RACE_ELF => -6));
// bad stuff, discard your headgear, lose a level
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Stoned Golem");
$x->setLevel(14);
$x->setLevels(1);
$x->setTreasures(4);
// bad stuff, you're dead.
// all but halflings can choose to ignore this guy, let him keep his treasure.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Floating Nose");
$x->setLevel(10);
$x->setLevels(1);
$x->setTreasures(3);
// bad stuff - no fleeing if you lose.  lose 3 levels.
// you can avoid fighting, by giving it an item worth at least 200 gold pieces.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("King Tut");
$x->setLevel(16);
$x->setLevels(2);
$x->setTreasures(4);
$x->setMonsterType(MonsterCard::MONSTERTYPE_UNDEAD);
// bad stuff - lose all items, and all cards in your hand
// will not pursue anyone level 3 or below.  higher level characters lose two levels EVEN IF THEY ESCAPE
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Harpies");
$x->setLevel(4);
$x->setLevels(1);
$x->setTreasures(2);
$x->setCombatClassAdjustments(array(ClassCard::CLASS_WIZARD => -5));
// bad stuff - lose 2 levels
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("3,872 Orcs");
$x->setLevel(10);
$x->setLevels(1);
$x->setTreasures(3);
$x->setCombatRaceAdjustments(array(RaceCard::RACE_DWARF => -6));
// bad stuff - roll a die.  2 or less, you die.  otherwise, lose as many levels as the die shows.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Undead Horse");
$x->setLevel(4);
$x->setLevels(1);
$x->setTreasures(2);
$x->setMonsterType(MonsterCard::MONSTERTYPE_UNDEAD);
$x->setCombatRaceAdjustments(array(RaceCard::RACE_DWARF => -5));
// bad stuff - lose two levels
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Lame Goblin");
$x->setLevel(1);
$x->setLevels(1);
$x->setTreasures(1);
$x->setRunAwayAdjustment(1);
// bad stuff - lose a level
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Leperchaun");
$x->setLevel(4);
$x->setLevels(1);
$x->setTreasures(2);
$x->setCombatRaceAdjustments(array(RaceCard::RACE_ELF => -5));
// bad stuff - takes two items from you, chosen by the players on either side.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Lawyers");
$x->setLevel(6);
$x->setLevels(1);
$x->setTreasures(2);
// won't attack a thief.  a thief can choose to discard two treasures, draw two new ones face down.
// bad stuff - each other player draws one card from your hand, starting with player to the left.  remaining are discarded
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Hippogriff");
$x->setLevel(16);
$x->setLevels(2);
$x->setTreasures(4);
// will not pursue anyone level 3 or below.
// bad stuff - each player (starting from one on the right) can take a treasure card from in front of you, or from your hand.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Shrieking Geek");
$x->setLevel(6);
$x->setLevels(1);
$x->setTreasures(2);
$x->setCombatClassAdjustments(array(ClassCard::CLASS_WARRIOR => -6));
// bad stuff - discard any race or class cards in play.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Insurance Salesman");
$x->setLevel(14);
$x->setLevels(1);
$x->setTreasures(4);
// levels dont count.  to be fought only with bonuses!  (items, spells, etc.)
// bad stuff - discard 1000 gold worth of items.  if you don't have it, lose everything.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Amazon");
$x->setLevel(8);
$x->setLevels(1);
$x->setTreasures(2);
// will not attack females, just give them one treasure.
// bad stuff - lose your class(es), or if you don't have one, 3 levels
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Platycore");
$x->setLevel(6);
$x->setLevels(1);
$x->setTreasures(2);
$x->setCombatClassAdjustments(array(ClassCard::CLASS_WIZARD => -6));
// bad stuff: discard your whole hand, or lose 2 levels
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Gazebo");
$x->setLevel(8);
$x->setLevels(1);
$x->setTreasures(2);
// no help allowed.  have to face it alone.
// bad stuff: lose three levels
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Drooling Slime");
$x->setLevel(1);
$x->setLevels(1);
$x->setTreasures(1);
$x->setCombatRaceAdjustments(array(RaceCard::RACE_ELF => -4));
// bad stuff: discard footgear you are wearing.  if you have none, lose a level.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Crabs");
$x->setLevel(1);
$x->setLevels(1);
$x->setTreasures(1);
// bad stuff: discard armor, and everything below the waist.
// cannot run from this monster.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Bullrog");
$x->setLevel(18);
$x->setLevels(2);
$x->setTreasures(5);
// bad stuff: you die.
// won't pursue anyone level 4 or below.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Pukachu");
$x->setLevel(6);
$x->setLevels(1);
$x->setTreasures(2);
// bad stuff: discard your whole hand
// gain an extra level if you defeat it without using help or bonuses (i.e. level only)
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Wight Brothers");
$x->setLevel(16);
$x->setLevels(2);
$x->setTreasures(4);
$x->setMonsterType(MonsterCard::MONSTERTYPE_UNDEAD);
// won't pursue levels 3 or below.  higher level characters lose 2 levels EVEN IF THEY ESCAPE
// bad stuff: reduced to level 1
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Maul Rat");
$x->setLevel(1);
$x->setLevels(1);
$x->setTreasures(1);
$x->setCombatClassAdjustments(array(ClassCard::CLASS_CLERIC => -3));
// bad stuff: lose a level
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Potted Plant");
$x->setLevel(1);
$x->setLevels(1);
$x->setTreasures(1);
// elves get an extra treasure after defeating it
// bad stuff: none.  escape is automatic.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Unspeakably Awful Indescribable Horror");
$x->setLevel(14);
$x->setLevels(1);
$x->setTreasures(4);
$x->setCombatClassAdjustments(array(ClassCard::CLASS_WARRIOR => -4));
// bad stuff: death for all but a wizard.  wizard just loses the class.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Net Troll");
$x->setLevel(10);
$x->setLevels(1);
$x->setTreasures(3);
// bad stuff: player(s) with the highest level each take an item from you.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Bigfoot");
$x->setLevel(12);
$x->setLevels(1);
$x->setTreasures(3);
$x->setCombatRaceAdjustments(array(RaceCard::RACE_DWARF => -3, RaceCard::RACE_HALFLING => -3));
// bad stuff - lose the headgear you're wearing
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Snails On Speed");
$x->setLevel(4);
$x->setLevels(1);
$x->setTreasures(2);
$x->setRunAwayAdjustment(-2);
// bad stuff.  roll a die and lose that many items, or cards in your hand.  yoru choice.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Wannabe Vampire");
$x->setLevel(12);
$x->setLevels(1);
$x->setTreasures(3);
// cleric can instantly defeat the vampure, get treasures, but no level increase
// bad stuff - lose 3 levels
$doorDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(2);
$x->setName("Flaming Armor");
$x->setLocation(EquipmentCard::LOCATION_BODY);
$x->setGoldValue(400);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(2);
$x->setName("Sneaky Bastard Sword");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setName("Spiky Knees");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(200);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setName("Really Impressive Title");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(0);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setName("Leather Armor");
$x->setLocation(EquipmentCard::LOCATION_BODY);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(200);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(2);
$x->setName("Boots Of Butt-Kicking");
$x->setLocation(EquipmentCard::LOCATION_FEET);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setName("Slimy Armor");
$x->setLocation(EquipmentCard::LOCATION_BODY);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(200);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setName("Huge Rock");
$x->setLocation(EquipmentCard::LOCATION_TWOHANDS);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setGoldValue(0);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setName("Chainsaw Of Bloody Dismemberment");
$x->setLocation(EquipmentCard::LOCATION_TWOHANDS);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setName("Helm Of Courage");
$x->setLocation(EquipmentCard::LOCATION_HEAD);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(200);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setName("Rat On A Stick");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setEquipmentType(EquipmentCard::TYPE_POLE);
$x->setGoldValue(0);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(2);
$x->setName("Buckler Of Swashing");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setName("Eleven-Foot Pole");
$x->setLocation(EquipmentCard::LOCATION_TWOHANDS);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setEquipmentType(EquipmentCard::TYPE_POLE);
$x->setGoldValue(200);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setClassRestrictions(array(ClassCard::CLASS_WIZARD));
$x->setName("Mithril Armor");
$x->setLocation(EquipmentCard::LOCATION_BODY);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setGenderRestrictions(array(Player::GENDER_FEMALE));
$x->setName("Gentlemen's Club");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setClassRestrictions(array(ClassCard::CLASS_WARRIOR));
$x->setName("Pantyhose Of Giant Strength");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(0);
$x->setRunAwayBonus(2);
$x->setName("Boots Of Running Really Fast");
$x->setLocation(EquipmentCard::LOCATION_FEET);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(2);
$x->setClassRestrictions(array(ClassCard::CLASS_THIEF));
$x->setName("Singing & Dancing Sword");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setRaceBonuses(array(RaceCard::RACE_ELF => 2));
$x->setName("Horny Helmet");
$x->setLocation(EquipmentCard::LOCATION_HEAD);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(5);
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_WIZARD)));
$x->setName("Staff Of Napalm");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setEquipmentType(EquipmentCard::TYPE_STAFF);
$x->setGoldValue(800);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setGenderRestrictions(array(Player::GENDER_MALE));
$x->setName("Broad Sword");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(4);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_ELF)));
$x->setName("Bow With Ribbons");
$x->setLocation(EquipmentCard::LOCATION_TWOHANDS);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(800);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_HALFLING)));
$x->setName("Limburger And Anchovy Sandwich");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_CLERIC)));
$x->setName("Cheese Grater Of Peace");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(4);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_HUMAN)));
$x->setName("Swiss Army Polearm");
$x->setLocation(EquipmentCard::LOCATION_TWOHANDS);
$x->setEquipmentType(EquipmentCard::TYPE_POLE);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_HALFLING)));
$x->setName("Stepladder");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(4);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_DWARF)));
$x->setName("Hammer Of Kneecapping");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(4);
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_CLERIC)));
$x->setName("Mace Of Sharpness");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_HUMAN)));
$x->setName("Bad-Ass Bandana");
$x->setLocation(EquipmentCard::LOCATION_HEAD);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_THIEF)));
$x->setName("Dagger Of Treachery");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(4);
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_WARRIOR)));
$x->setName("Shield Of Ubiquity");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_WIZARD)));
$x->setName("Pointy Hat Of Power");
$x->setLocation(EquipmentCard::LOCATION_HEAD);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_DWARF)));
$x->setName("Short Wide Armor");
$x->setLocation(EquipmentCard::LOCATION_BODY);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(400);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(4);
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_THIEF)));
$x->setName("Cloak Of Obscurity");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_ELF)));
$x->setName("Rapier Of Unfairness");
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(0);
$x->setRunAwayBonus(3);
$x->setName("Tuba Of Charm");
// on successful flee, take a face down treasure card
$x->setLocation(EquipmentCard::LOCATION_ONEHAND);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setGoldValue(300);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(0);
$x->setName("Sandals Of Protection");
// curses found when kicking open a door have no effect
$x->setLocation(EquipmentCard::LOCATION_FEET);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(700);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(0);
// no higher level player can refuse request for help, or ask for a reward in doing so.
// can't gain the winning level in a combat where you use this.
$x->setClassRestrictions(array(ClassCard::CLASS_CLERIC));
$x->setName("Kneepads Of Allure");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setName("Hireling");
// allows player to carry and use one extra item.  
// discard for an automatic escape against a monster.
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setGoldValue(0);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);
