<?php

include_once("nodebite-swiss-army-oop.php");

$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "Save_data"
));

// nollställer (i mitt fall databasen "$data_base") vid sidomladdning 
unset($data_base);

//--------------------------------------------------------------
// kollar alla karaktärers health points

function HP_status($name){

  $health = $name->name." HP: ".$name->health;
  return $health;
}

//--------------------------------------------------------------
// skapar karaktärer om inte dessa finns i databasen
if (!count($data_base->characters)){

	$object_king_arthur = New Knight("King Arthur");
  // $object_legolas = New Archer("Legolas");
  // $object_merlin = New Sorcerer("Merlin");

	// $object_legolas->set_name("Legolas");

	$data_base->characters[] = &$object_king_arthur;
  // $data_base->characters[] = &$object_legolas;
  // $data_base->characters[] = &$object_merlin;
}
else 
{
  	$object_king_arthur = &$data_base->characters[0];
    // $object_legolas = &$data_base->characters[1];
    // $object_merlin = &$data_base->characters[2];
}

//--------------------------------------------------------------

if (!count($data_base->enemies)){

	$object_necromancer = New Necromancer("Necro Mancer");
  // $object_south_dragon = New South_Dragon("South Dragon");
  // $object_north_dragon = New North_Dragon("North Dragon");
  // $object_dark_knight = New Dark_Knight("Dark Knight");
  // $object_owl_eye = New Owl_Eye("Owl Eye");
  // $object_vampir = New Vampir("Vampir");
  // $object_skeleton = New Skeleton("Skeleton");
  // $object_manticor = New Manticor("Manticor");
  // $object_ghoul = New Ghoul("Ghoul");
  // $object_magician = New Magician("Magician");

	// $object_necromancer->set_character_name("Necro Mancer");

	$data_base->enemies[] = &$object_necromancer;
  // $data_base->enemies[] = &$object_south_dragon;
  // $data_base->enemies[] = &$object_north_dragon;
  // $data_base->enemies[] = &$object_dark_knight;
  // $data_base->enemies[] = &$object_owl_eye;
  // $data_base->enemies[] = &$object_vampir;
  // $data_base->enemies[] = &$object_skeleton;
  // $data_base->enemies[] = &$object_manticor;
  // $data_base->enemies[] = &$object_ghoul;
  // $data_base->enemies[] = &$object_magician;
}
else
{
  	$object_necromancer = &$data_base->enemies[0];
    // $object_south_dragon = &$data_base->enemies[1];
    // $object_north_dragon = &$data_base->enemies[2];
    // $object_dark_knight = &$data_base->enemies[3];
    // $object_owl_eye = &$data_base->enemies[4];
    // $object_vampir = &$data_base->enemies[5];
    // $object_skeleton = &$data_base->enemies[6];
    // $object_manticor = &$data_base->enemies[7];
    // $object_ghoul = &$data_base->enemies[8];
    // $object_magician = &$data_base->enemies[9];
}

//$player = $objekt_king_arthur;
$player = New Protagonists
(
  "ProtoTeam",
  $object_king_arthur,
  $object_legolas,
  $object_merlin
);


$enemy = $object_necromancer;

$battle_story = array();

while($player->is_alive() == true && $enemy->is_alive() == true){
  //echo ("<br>".$object_king_arthur->battle($object_necromancer));
  $battle_story[] = $player->battle($enemy);
  $battle_story[] = $enemy->battle($player);
  $battle_story[] = HP_status($player);
  $battle_story[] = HP_status($enemy);
}

  for($i=0;$i<count($battle_story);$i++){
    echo($battle_story[$i]);
    echo "<br>";
  }

// var_dump($battle_story);
// var_dump($player);
// var_dump($enemy);

//--------------------------------------------------------------
// (måste ha variabelnamn($...) som värde för att hämta från DB)

$battle_order = array($object_king_arthur, $object_necromancer);

// var_dump($battle_order);

//-------------------------------------------------------------

$object_weapons = array();  
  $object_weapons[] = New weapon("Elf Sword", array("Strength" => 0,));
  $object_weapons[] = New weapon("Oak Bow", array("Strength" => 0,));
  $object_weapons[] = New weapon("Dwarf Axe", array("Strength" => 0,));


$object_armors = array();  
  $object_armors[] = New armor("Mithril Shirt", array("Strength" => 0,));
  $object_armors[] = New armor("Plate Armor", array("Strength" => 0,));
  $object_armors[] = New armor("Robe", array("Strength" => 0,));


$object_items = array();  
  $object_items[] = New item("Potion", array("Heal" => 0,));
  $object_items[] = New item("Herb", array("Heal" => 0,));
  $object_items[] = New item("Beer", array("Strength" => 0, "Drunk" => 0));
//-------------------------------------------------------------

$object_antagonists = array();
  $object_antagonists[] = New Antagonist("Necro Mancer");
  $object_antagonists[] = New Antagonist("South Dragon");
  $object_antagonists[] = New Antagonist("North Dragon");
  $object_antagonists[] = New Antagonist("Dark Knight");
  $object_antagonists[] = New Antagonist("Owl Eye");
  $object_antagonists[] = New Antagonist("Vampir");
  $object_antagonists[] = New Antagonist("Skeleton");
  $object_antagonists[] = New Antagonist("Manticor");
  $object_antagonists[] = New Antagonist("Ghoul");
  $object_antagonists[] = New Antagonist("Magician");