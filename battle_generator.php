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
unset($data_base->characters);
// exit();
//--------------------------------------------------------------
// kollar alla karaktärers health points

// function HP_status($name){

//   $health = $name->name." HP: ".$name->health;
//   return $health;
// }

//--------------------------------------------------------------
// skapar karaktärer om inte dessa finns i databasen
// if (!count($data_base->characters)){

	// $object_king_arthur = New Knight("King Arthur");
  // $object_legolas = New Archer("Legolas");
  // $object_merlin = New Sorcerer("Merlin");

	// $object_legolas->set_name("Legolas");

	// $data_base->characters[] = &$object_king_arthur;
  // $data_base->characters[] = &$object_legolas;
  // $data_base->characters[] = &$object_merlin;
// }
// else 
// {
  	// $object_king_arthur = &$data_base->characters[0];
    // $object_legolas = &$data_base->characters[1];
    // $object_merlin = &$data_base->characters[2];
// }

//--------------------------------------------------------------

// if (!count($data_base->enemies)){
	// $object_necromancer = New Necromancer("Necro Mancer");


	// $object_necromancer->set_character_name("Necro Mancer");

	// $data_base->enemies[] = &$object_necromancer;
// }
// else
// {
  	// $object_necromancer = &$data_base->enemies[0];
// }

//$player = $objekt_king_arthur;
// $object_players = New Protagonists
// (
//   "ProtoTeam",
//   $object_king_arthur,
//   $object_legolas,
//   $object_merlin
// );

$object_protagonists = array();

  $object_protagonists[] = New Protagonists(
    "King Arthur", 
    array(
      "Health" => 100,
      "Strength" => 10,
      "Dexterity" => 10,
      "Intelligence" => 10
    ),
      "Legolas", array(
      "Health" => 100,
      "Strength" => 10,
      "Dexterity" => 10,
      "Intelligence" => 10
    ),
      "Merlin", array(
      "Health" => 100,
      "Strength" => 10,
      "Dexterity" => 10,
      "Intelligence" => 10
    )
  );





$object_antagonists = array();

  $object_antagonists[] = New Antagonist(
    "Necro Mancer", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "South Dragon", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "North Dragon", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "Dark Knight", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "Owl Eye", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "Vampir", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "Skeleton", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "Manticor", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "Ghoul", array(
      "Health" => 100,
      "Strength" => 10
    )
  );
  $object_antagonists[] = New Antagonist(
    "Magician", array(
      "Health" => 100,
      "Strength" => 10
    )
  );

// $enemy = $object_necromancer;

$battle_story = array();
// var_dump($object_protagonists);
// exit();

while($object_protagonists->is_alive() == true && $object_antagonists->is_alive() == true){
  //echo ("<br>".$object_king_arthur->battle($object_necromancer));
  $battle_story[] = $object_protagonists->battle($object_antagonists[0]);
  $battle_story[] = $object_antagonists->battle($object_protagonists);
  $battle_story[] = HP_status($object_protagonists);
  $battle_story[] = HP_status($object_antagonists);
}

  for($i=0;$i<count($battle_story);$i++){
    echo($battle_story[$i]);
    echo "<br>";
  }

var_dump($battle_story);
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

