<?php
namespace fdask\Munchkin;

// Unnatural Axe Expansion.  Munchkin 2!
$x = new EquipmentCard();
$x->setBonus(3);
$x->setName("Tweezers Of Terror");
$x->setLocation(EquipmentCard::LOCATION_ONE_HAND);
$x->setGoldValue(400);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_ELF)));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(4);
$x->setName("Lawn Roller");
$x->setLocation(EquipmentCard::LOCATION_ONE_HAND);
$x->setGoldValue(400);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_DWARF)));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(5);
$x->setName("Slug Thrower");
$x->setLocation(EquipmentCard::LOCATION_TWO_HANDS);
$x->setGoldValue(800);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_ORC)));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setName("Very Holy Book");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setGoldValue(400);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_CLERIC)));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setName("Barbecue Fork");
$x->setLocation(EquipmentCard::LOCATION_ONE_HAND);
$x->setGoldValue(400);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setRaceRestrictions(array_diff(RaceCard::getRaces(), array(RaceCard::RACE_HALFLING)));
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(2);
$x->setName("Cute Shoulder Dragon");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setGoldValue(600);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setGenderBonuses(array(Player::GENDER_FEMALE => 2));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(5);
$x->setName("Unnatural Axe");
$x->setLocation(EquipmentCard::LOCATION_ONE_HAND);
$x->setGoldValue(800);
$x->setSize(EquipmentCard::SIZE_BIG);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_WARRIOR)));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(2);
$x->setName("Spiked Codpiece");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setGoldValue(600);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setGenderBonuses(array(Player::GENDER_MALE => 2));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(3);
$x->setName("Familiar");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setGoldValue(400);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_WIZARD)));
$treasureDeck->addCard($x);

$x = new EquipmentCard();
$x->setBonus(1);
$x->setName("Boomdagger");
$x->setLocation(EquipmentCard::LOCATION_NONE);
$x->setGoldValue(100);
$x->setSize(EquipmentCard::SIZE_SMALL);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$x->setClassRestrictions(array_diff(ClassCard::getClasses(), array(ClassCard::CLASS_THIEF)));
// if stolen, lost to a cusre, or sold, the dagger returns to the owner at the beggining of his next turn.
// if traded, looted, or given away, its now faithful to new owner.   
// only lost permanently to death, or bad stuff
$treasureDeck->addCard($x);

$x = new EquipmentModCard();
$x->setBonusAdjustment(2);
$x->setName("... Of Doom");
$x->setPlayableStates(array(Game::STATE_STARTUP));
$treasureDeck->addCard($x);

$x = new GameModCard();
$x->setName("Cheat!");
// play card with an item in play, or when you play an item from your hand.
// basically lets you use any item that would normally be illegal.
// attachs to the item and discards when item is discarded
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Wandering Monster");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// play with a monster from your hand, when anyone is in combat
// monster joins the one already fighting.
// if combatants flee, roll each monster seperately, in order victim chooses
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Friendly");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// all monstesr give you treasure without fighting.  if you fight anyway, roll die twice AFTER and add that number of levels to each insulted monsters
// not compatible with rnraged or sleeping.
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Dead Broke");
$x->setPlayableStates(array(Game::STATE_COMBAT));
// monster now has no treasure
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Dead");
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setAdditionalTreasures(0);
// monster is instantly dead.  take treasure, no levels
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Sleeping");
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setMonsterLevelBonus(-5);
$x->setAdditionalTreasures(-1);
// not compatible with enraged or friendly.
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Brood");
$x->setPlayableStates(array(Game::STATE_COMBAT));
$x->setMonsterLevelBonus(10);
$x->setAdditionalTreasures(2);
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Undead");
$x->setMonsterLevelBonus(5);
$x->setAdditionalTreasures(2);
// cant play on monsters that are already undead
$x->setPlayableStates(array(Game::STATE_COMBAT));
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Mommy");
$x->setMonsterLevelBonus(5);
// play on any monster 5 or below, or one that is a baby
// another monster, same kind, appears... 10 levesl higher.  seperate monster, affected by all enhancements except baby.  bad stuff is the same.
// mommy is defeated, draw treasure and go up levels as for the baby, plus 1 extra treasure and level
$x->setPlayableStates(array(Game::STATE_COMBAT));
$doorDeck->addCard($x);


$x = new GameModCard();
$x->setName("Half-Breed");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// lets a player have TWO race cards in play, or just one, but only the positives.
$doorDeck->addCard($x);

$x = new GameModCard();
$x->setName("Super Munchkin");
$x->setPlayableStates(array(Game::STATE_STARTUP));
// may have two class cards in play, or just one, but only the positives
$doorDeck->addCard($x);

$x = new CurseCard();
$x->setName("Curse! Fool's Gold");
$x->setCurseType(CurseCard::TYPE_ONESHOT);
$x->setPlayableStates(Game::getGameStates());
// get no combat from your next combat.  if you are IN combat, applies immediately
$doorDeck->addCard($x);

$x = new ClassCard(ClassCard::CLASS_WIZARD);
// discard up to 3 cards after rolling die to run away.  each one gives +1 bonus
// discard your whole hand (min 3 cards) to discard a monster and take it's treasure (dont gain a level).  other monsters fought normally
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

$x = new ClassCard(ClassCard::CLASS_WARRIOR);
// discard up to three cards in combat, each one giving you +1.
// wins ties in combat
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_ELF);
$x->setRunAwayModifier(1);
$x->setCombatAssistLevelUp(true);
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_DWARF);
// carry any number of big items
// can have six cards in your hand
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_HALFLING);
// sell one item each turn for double price (others are normal)
// if you fail your initial run away, you can discard a card and try again
$x->setPlayableStates(array(Game::STATE_STARTUP));
$doorDeck->addCard($x);

$x = new RaceCard(RaceCard::RACE_ORC);
$x->setPlayableStates(array(GAME::STATE_STARTUP));
// can ignore curses, and lose a level instead.  unless level 1.
// when fighting alone and defeats a monster by more than ten, go up an extra level!
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Pinata");
$x->setLevel(3);
$x->setLevels(1);
$x->setTreasures(1); // one for EVERY MEMBER OF THE PARTY
// bad stuff, player to your left picks one item you have in play.  discard it.
// treasures for each party member, drawn face up
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Grassy Gnoll");
$x->setLevel(7);
$x->setLevels(1);
$x->setTreasures(2); 
$x->setCombatRaceAdjustments(array(RaceCard::RACE_HUMAN => 5));
// bad stuff,  lose 3 levels.  you can elininate one of these for each potion you discard IMMEDIATELY
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Teddy Bear");
$x->setLevel(5);
$x->setLevels(1);
$x->setTreasures(2); 
$x->setCombatRaceAdjustments(array(RaceCard::RACE_ORC => 5));
// bad stuff,  discard your whole hand.  if more than one card, draw one treasure.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Psycho Squirrel");
$x->setLevel(3);
$x->setLevels(1);
$x->setTreasures(1); 
// will not attack females, or wearers of spiked codpiece
// bad stuff,  lose a level. 
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Crawling Hand");
$x->setLevel(5);
$x->setLevels(1);
$x->setTreasures(2); 
$x->setMonsterType(MonsterCard::MONSTERTYPE_UNDEAD);
// apply a wishing ring to this m onster, now it's your friend.  hand is now a small item that gives +3 in combat
// bad stuff,  undead wedgie!  lose 2 levels
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Fungus");
$x->setLevel(5);
$x->setLevels(1);
$x->setTreasures(2); 
//  if becomes humongous, gets +25!
// bad stuff,  elves lose 2 levels.  anyone else 1.   double penalty if humongous.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Were-Turtle");
$x->setLevel(3);
$x->setLevels(1);
$x->setTreasures(1); 
//  +2 to run away
// bad stuff,  lose your race... if half breed, lose one non-human race.  if human already, nothing.
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("Plague Rats");
$x->setLevel(5);
$x->setLevels(1);
$x->setTreasures(2); 
//  flees from orcs, leaves treasure.   anyone else must fight and is -1 to run away
// bad stuff,  lose 2 levels
$doorDeck->addCard($x);

$x = new MonsterCard();
$x->setName("The Mighty Germ");
$x->setLevel(3);
$x->setLevels(1);
$x->setTreasures(1); 
// halflings kill automatically 
// bad stuff,  discard two cards of your choice from your hand
$doorDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Wishing Ring");
$x->setGoldValue(500);
// cancels any curse.  play at any time.
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Potion Of Disbelief");
$x->setGoldValue(1000);
$x->setPlayableStates(array(Game::STATE_COMBAT));
// dicard one monster.  nobody gets levesl for this.   
// only take treasure if you defeat remaining monsters
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Baby Oil");
$x->setGoldValue(300);
$x->setPlayableStates(array(Game::STATE_COMBAT));
// automatically run away from any combat, for one or two players... even ones that can't normally be escaped
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Lemming Juice");
$x->setGoldValue(100);
$x->setPlayableStates(array(Game::STATE_COMBAT));
// +3 to either side
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Your Shoe's Untied!");
$x->setGoldValue(0);
$x->setPlayableStates(array(Game::STATE_COMBAT));
// +3 to either side
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Trojan Horse");
$x->setGoldValue(0);
// play along with a monster, when someone is about to draw treasure
// they don't get any treasure... they have to fight the monster!
// or play with no monster to remove all treasure
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Garage Sale");
$x->setGoldValue(0);
// play as soon as you get it, or any time later time when it's your turn
// chooose one item, discard it.  dig through discards and take any TWO items, each of value equal or less than what you discarded
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Potion Of Cowardice");
$x->setGoldValue(300);
$x->setPlayableStates(array(Game::STATE_COMBAT));
// forces players to run away, even if they could have won!
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Itching Powder");
$x->setGoldValue(200);
$x->setPlayableStates(array(Game::STATE_COMBAT));
// discard any one item of cothing or armor that YOU specify.   weapons and shields are not clothing/armor
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Potion Of Flight");
$x->setGoldValue(300);
$x->setPlayableStates(array(Game::STATE_COMBAT));
// +5 to either side
$treasureDeck->addCard($x);

$x = new OneShotCard();
$x->setName("Loaded Die");
$x->setGoldValue(300);
// play after rolling the die.  pick any number you want.
$treasureDeck->addCard($x);
$treasureDeck->addCard($x);


