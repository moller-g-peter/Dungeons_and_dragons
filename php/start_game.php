<?php

include_once("nodebite-swiss-army-oop.php");

$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "Save_data"
));

unset($data_base->protagonists);
unset($data_base->cpu_protagonists);
unset($data_base->antagonists);
unset($data_base->items);

$object_protagonists = &$data_base->protagonists;
$object_cpu_protagonists = &$data_base->cpu_protagonists;
$object_antagonists = &$data_base->antagonists;
$object_items = &$data_base->items;

if (isset($_REQUEST["playerName"]) && isset($_REQUEST["playerClass"]))
{
  // it might be easier to store our data in different variables
  // var_dump($_REQUEST);
  // $_REQUEST["playerName"];
  // $_REQUEST["playerClass"];

  $chosen_protagonist = new Character ($_REQUEST["playerName"], $_REQUEST["playerClass"]);

  $object_protagonists[] = &$chosen_protagonist;
} 
else 
{
  echo(json_encode(false));
  die();
}

//--------------------------------------------------------------

  // $object_king_arthur = New Knight("");
  // $object_legolas = New Archer("");
  // $object_merlin = New Sorcerer("");


  $protagonists = array(
    array("name" => "Arthur", "class" => "Knight"),
    array("name" => "Legolas", "class" => "Archer"),
    array("name" => "Merlin", "class" => "Sorcerer")
  );

  $randomize_protagonists = mt_rand(0, count($protagonists) -1);

  $temporary_protagonist = new Character ($protagonists[$randomize_protagonists]["name"], $protagonists[$randomize_protagonists]["class"]);

  unset($protagonists[$randomize_protagonists]);
  $protagonists = array_values($protagonists);

  //--------------------------------------------------------------

  $object_items = array();

  // i mitt fall så är public "$skills;" i "Item class" = Heal, Strength, Attack, Protection
  $object_items[] = New Items("Potions", array("Heal" => 20));
  $object_items[] = New Items("Herb", array("Heal" => 10));
  $object_items[] = New Items("Beer", array("Strength" => 15, "Dexterity" => 10));

  $object_items[] = New Items("Sword", array("Attack" => 20));
  $object_items[] = New Items("Bow", array("Attack" => 15));
  $object_items[] = New Items("Staff", array("Attack" => 10, "Magic" => 30));

  $object_items[] = New Items("Armor", array("Protection" => 20));
  $object_items[] = New Items("Shield", array("Protection" => 15));
  $object_items[] = New Items("Robe", array("Protection" => 10, "Magic protection" => 15));

  //--------------------------------------------------------------

  $object_antagonists = array();

  $object_antagonists[] = New Antagonist("Necro Mancer", array("Health" => 90,"Strength" => 1));
  $object_antagonists[] = New Antagonist("South Dragon", array("Health" => 100,"Strength" => 10));
  $object_antagonists[] = New Antagonist("North Dragon", array("Health" => 150,"Strength" => 11));
  $object_antagonists[] = New Antagonist("Dark Knight", array("Health" => 120,"Strength" => 9));
  $object_antagonists[] = New Antagonist("Owl Eye", array("Health" => 90,"Strength" => 3));
  $object_antagonists[] = New Antagonist("Vampir", array("Health" => 80,"Strength" => 8));
  $object_antagonists[] = New Antagonist("Skeleton", array("Health" => 35,"Strength" => 5));
  $object_antagonists[] = New Antagonist("Manticor", array("Health" => 40,"Strength" => 7));
  $object_antagonists[] = New Antagonist("Ghoul", array("Health" => 55,"Strength" => 4));
  $object_antagonists[] = New Antagonist("Magician", array("Health" => 77,"Strength" => 2));

  //--------------------------------------------------------------

// if (!count($battle_story)) {
//   $object_items["Potion"] = true;
// }
// if (!$object_king_arthur->item_quantity()) {
//   $object_items["Potion"] = false;
// }

echo(json_encode(array($data_base->protagonists)));