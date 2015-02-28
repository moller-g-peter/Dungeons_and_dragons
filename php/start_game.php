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

if (isset($_REQUEST["playerName"]) && isset($_REQUEST["playerClass"])) {
  // it might be easier to store our data in different variables

  $create_player = $_REQUEST["playerName"];
  $create_class = $_REQUEST["playerClass"];

  $new_player = New $create_class($create_player);
  $object_protagonists[] = &$new_player;
} else {
  echo(json_encode(false));
  die();
}

//--------------------------------------------------------------

  $object_king_arthur = New Knight("King Arthur");
  $object_legolas = New Archer("Legolas");
  $object_merlin = New Sorcerer("Merlin");


  // $object_protagonists = array();
  // $object_protagonists[] = New Protagonists(
  //   "Protagonists",
  //   $object_king_arthur,
  //   $object_legolas,
  //   $object_merlin
  // );

  //--------------------------------------------------------------

  $object_items = array();

  // i mitt fall så är public "$skills;" i "Item class" = Heal, Strength, Attack, Protection
  $object_items[] = New Items("Potions", array("Heal" => 10));
  $object_items[] = New Items("Herb", array("Heal" => 10));
  $object_items[] = New Items("Beer", array("Strength" => 10, "Drunk" => 10));
  $object_items[] = New Items("Sword", array("Attack" => 10));
  $object_items[] = New Items("Bow", array("Attack" => 10));
  $object_items[] = New Items("Staff", array("Attack" => 10, "Magic" => 10));
  $object_items[] = New Items("Armor", array("Protection" => 10));
  $object_items[] = New Items("Shield", array("Protection" => 10));
  $object_items[] = New Items("Robe", array("Protection" => 10, "Magic protection" => 10));

  //--------------------------------------------------------------

  $object_antagonists = array();

  $object_antagonists[] = New Antagonist("Necro Mancer", array("Health" => 1000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("South Dragon", array("Health" => 1500,"Strength" => 10));
  $object_antagonists[] = New Antagonist("North Dragon", array("Health" => 2000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Dark Knight", array("Health" => 2500,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Owl Eye", array("Health" => 3000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Vampir", array("Health" => 3500,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Skeleton", array("Health" => 4000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Manticor", array("Health" => 4500,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Ghoul", array("Health" => 5000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Magician", array("Health" => 5500,"Strength" => 10));

  //--------------------------------------------------------------

// if (!count($battle_story)) {
//   $object_items["Potion"] = true;
// }
// if (!$object_king_arthur->item_quantity()) {
//   $object_items["Potion"] = false;
// }

echo(json_encode(array($data_base->protagonists)));