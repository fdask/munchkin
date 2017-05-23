<?php
namespace fdask\Munchkin;

// Clerical Errors Expansion.  Munchkin 3!
$x = new GameModCard();
$x->setName("Big Honking Sword Of Character Whupping - +10 To Monster");
$x->setMonsterLevelBonus(10);
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(2);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Underdressed");
$x->setMonsterLevelBonus(5);
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(1);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("... From Hell");
$x->setMonsterLevelBonus(5);
$x->setMonsterLevelClassBonuses(array(ClassCard::CLASS_CLERIC => 5));
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(1);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Very Depressed");
$x->setMonsterLevelBonus(-5);
$x->setMonsterLevelClassBonuses(array(ClassCard::CLASS_CLERIC => 5));
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(-1);
// cannot be played with Enraged.  that OR this.
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Royal Oil");
$x->setGoldValue(100);
$x->setPlayableStates(array(Game::STATE_COMBAT));
// +3 bonus to either side.  useable once only
$treasureDeck->addCard($x);

$x = new GameModCard();
$x->setName("Undead");
$x->setMonsterLevelBonus(5);
$x->setAdditionalTreasures(2);
// cant play on monsters that are already undead
$x->setPlayableStates(array(Game::STATE_COMBAT));
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Typographical Error");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// adjusts monsters level to 1!
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Filthy Rich");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// play on ONE monster during combat.  if it's treasure is captured, player has the option of redrawing treasure(s) after looking at it, once only
$doorDeck->addCard($x);

// two of these
$x = new GameModCard();
$x->setName("Half-Breed");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// lets a player have TWO race cards in play, or just one, but only the positives.
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Cheat!");
// play card with an item in play, or when you play an item from your hand.
// basically lets you use any item that would normally be illegal.
// attachs to the item and discards when item is discarded
$doorDeck->addCard($x);

$x = new ClassCard(ClassCard::CLASS_WIZARD);
// discard up to 3 cards after rolling die to run away.  each one gives +1 bonus
// discard your whole hand (min 3 cards) to discard a monster and take it's treasure (dont gain a level).  other monsters fought normally
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new ClassCard(ClassCard::CLASS_WARRIOR);
// discard up to three cards in combat, each one giving you +1.
// wins ties in combat
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new ClassCard(ClassCard::CLASS_CLERIC);
// when you draw cards face up, you can instaed take some or all from the top of the appropriate discard pile
// discard one card from your hand for each card drawn like this.
// discard up to 3 cards in combat against an undead.  each discard gives you +3.
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new ClassCard(ClassCard::CLASS_THIEF);
// discard a card to backstab another player (-2 in combat).  only once per victim, per combat
// discard a card to try and steal a small item from another player.  4 or more success, otherwise lose a level
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_HALFLING);
// sell one item each turn for double price (others are normal)
// if you fail your initial run away, you can discard a card and try again
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_GNOME);
// when in combat ALONE, play a monster card from your hand to add it's level to yours. (as an illusion)
// +1 for any non-one-shot item beginning with the letters G or N
// monsteres treat you as a halfing.  exception: monsters with "Nose" in their name will never pursue you.  you get automatic run away.
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_DWARF);
$x->setPlayableStates(array(Game::STATE_STARTUP));
// carry any number of big items.
// 6 items in your hand.
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_ORC);
$x->setPlayableStates(array(GAME::STATE_STARTUP));
// can ignore curses, and lose a level instead.  unless level 1.
// when fighting alone and defeats a monster by more than ten, go up an extra level!
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_ELF);
$x->setRunAwayModifier(1);
$x->setCombatAssistLevelUp(true);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Goldfish");
$x->setLevel(1);
$x->setLevels(1);
$x->setTreasures(1);
$x->setRunAwayAutomatic(true);
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Rapier Twit");
$x->setLevel(3);
$x->setLevels(1);
$x->setTreasures(1);
// monster enhancers on this guy have DOUBLE effect
// bad things.  lose your armor.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Resident Weevil");
$x->setLevel(2);
$x->setLevels(1);
$x->setTreasures(1);
// +3 against no class.
// bad stuff.  sacrifice one card of your choice to the evil of the weevil
$doorDeck->addCard($x);
$x = new MonsterCard(); $x->setName("Pack Rat");
$x->setLevel(3);
$x->setLevels(1);
$x->setTreasures(1);
// if you have NO items in play, draw two face up treasures and choose one.  OR choose to fight.
// discard the highest-value item you have in play and draw a face-up treasure.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Perfectly Ordinary Bunny Rabbit");
$x->setLevel(2);
$x->setLevels(1);
$x->setTreasures(1);
// after adding helpers, if any, roll die.  on 7, level is actually 15, and helper can't leave.
// bad stuff.  you're dead!
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Stick Figure");
$x->setLevel(1);
$x->setLevels(1);
$x->setTreasures(1);
$x->setCombatRaceAdjustments(array(RaceCard::RACE_HALFLING => 4));
// bad stuff - you lose your sex, until another player changes sex... then you become the same sex they do.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Bobble-Head");
$x->setLevel(2);
$x->setLevels(1);
$x->setTreasures(1);
// elves can't fight (just discard the card), or assist against this guy.  
// bad stuff.  each orc in play draws one card from your hand.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Tequila Mockingbird");
$x->setLevel(1);
$x->setLevels(1);
$x->setTreasures(1);
$x->setCombatClassAdjustments(array(ClassCard::CLASS_BARD => 5));
// discard two cards from hand.
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Exploding Kneecaps");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// lose a level.   if wearing something on knees, lose the item and TWO levels
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Tourist Trap");
$x->setCurseType(CurseCard::TYPE_CONTINUOUS);
$x->setPlayableStates(Game::getGameStates());
// can't look for trouble.  stays until you help someone win a combat
$doorDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Wishing Ring");
$x->setGoldValue(500);
// cancels any curse.  play at any time.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Liquid Wench");
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setGoldValue(400);
// +3 to either side
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Oil Of Boiling");
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setGoldValue(200);
// +3 to either side
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Hot Pepper Sauce");
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setGoldValue(300);
// +3 to either side, or +6 to halfling
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Potion Of Apathy");
$x->setPlayableStates(array(Game::STATE_COMBAT)); // after someone is chosen to aid the combat
$x->setGoldValue(0);
// the chosen aid wanders away, and does not participate.  gets back any cards he played.   another helper can be chosen if there are volunteers.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Take Me! Take Me!");
// when a player can be asking for help, use this to force them to take you.   you cannot demand a reward.
// previous volunteers get one shot cards back if they played any.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("The Dungeon Casino");
// not usable during combat
// discard items worth 500, roll a die.
// 1 - lose a level
// 2 - discard one card from hand or table
// 3/4 - draw 1 treasure, face up
// 5 - draw 2 treasures, face up
// 6 - draw 3 treasures, face up
$x->setPlayableStates(array_diff(Game::getGameStates(), array(Game::STATE_PRE_COMBAT, Game::STATE_POST_COMBAT, Game::STATE_COMBAT)));
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Monsters Are Busy");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// losing monster will swap treasure for GUAL cards.  get 2 treasures for each GUAL you give
$doorDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Tasty Pie");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// +2 to either side, or +4 if thrown by an orc.   
// halfling can eat it, and go up a level
$x->setGoldValue(100);
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Dwarf Tossing");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// pick up a dwarf who is NOT in the combat.  throw them into fray.  +6 to either side.  can't throw yourself.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Semi-Final Strike");
// mods an existing item you have thats NOT usable once only.  so a perm item.
// get 3 times the normal bonus from that item, for a single combat.  then roll the die.  on a 6, you keep the item, otherwise, discarded.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Loaded Die");
$x->setGoldValue(300);
// play after rolling the die.  pick any number you want.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Feline Intervention");
//play after anyone rolls the die, for any reason.   that roll, and any cards used to affect it, are lost.  roll again.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Restraining Order");
$x->setGoldValue(100);
// play at any time.  opponenet you play it on can't play any cards against you for the rest of the turn.  return any cards already played to their hand.
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setName("Casting Couch");
$x->setGoldValue(800);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setPlayableStates(array(Game::STATE_STARTUP));
// treated as a wizard when equipped.  you can decide to use it at the beginning of each combat.  if you use it, -1 to run away.
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setName("The Occasionally Reliable Amulet");
$x->setGoldValue(600);
$x->setPlayableStates(array(Game::STATE_STARTUP));
// when a curse hits you, roll die.  1-3, curse works and amulet discarded.  4-6, curse is blocked!  6, go up a level!
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

$x = new EquipmentCard();
$x->setGoldValue(100);
// wearer can use elf only items.
// monsters react as if wearer is an elf.  
// no elf abilities
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setGoldValue(1000);
$x->setName("The Other Ring");
$x->setBonus(2);
// automatically run away from any combat, regardless of ANY other cards... but lose a level.
// also used as a wishing ring, discarded afterward.
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setName("Two-Handed Sword");
$x->setGoldValue(800);
// gain on extra hand to hold stuff when you equipment this
$x->setBonus(2);
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setName("Awful Socks");
$x->setGoldValue(200:
$x->setBonus(4);
// footgear
// +5 vs. floating nose or its shadow.   no other player will accept your help while you wear these.  they can still help YOU
// you can combine these with other footgear
$treasureDeck->addCard($x);

$x = new EquipmentModCard();
$x->setName("Blessed");
$x->setBonusAdjustment(2);
$treasureDeck->addCard($x);

$x = new EquipmentModCard();
$x->setName("Convenient Handles");
$x->setGoldValue(100);
$x->setSizeAdjustment(EquipmentCard::SIZE_SMALL);
$treasureDeck->addCard($x);
