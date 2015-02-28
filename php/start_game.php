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


  // $object_items[] = New items("Potion", array("Amount" => 3));
//   $object_items[] = New item("Herb", array("Heal" => 0));
//   $object_items[] = New item("Beer", array("Strength" => 0));
//--------------------------------------------------------------


  $object_king_arthur = New Knight("King Arthur");
  $object_legolas = New Archer("Legolas");
  $object_merlin = New Sorcerer("Merlin");

  // $object_king_arthur->weapons = $object_weapons[0];
  // $object_legolas->weapons = $object_weapons[1];
  // $object_merlin->weapons = $object_weapons[2];

  // $object_king_arthur->armors = $object_armors[0];
  // $object_legolas->armors = $object_armors[1];
  // $object_merlin->armors = $object_armors[2];

  // $object_protagonists[] = New Protagonists(
  //   "Protagonists",
  //   $object_king_arthur,
  //   $object_legolas,
  //   $object_merlin
  // );

  $object_items[] = New Items("Potions", array("Heal" => 10));
  $object_items[] = New Items("Herb", array("Heal" => 10));
  $object_items[] = New Items("Beer", array("Strength" => 10, "Drunk" => 10));
  $object_items[] = New Items("", array("" => 10));
  $object_items[] = New Items("", array("" => 10));
  $object_items[] = New Items("", array("" => 10));
  $object_items[] = New Items("", array("" => 10));
  $object_items[] = New Items("", array("" => 10));
  $object_items[] = New Items("", array("" => 10));

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

// if (!count($battle_story)) {
//   $object_items["Potion"] = true;
// }
// if (!$object_king_arthur->item_quantity()) {
//   $object_items["Potion"] = false;
// }

echo(json_encode(true));