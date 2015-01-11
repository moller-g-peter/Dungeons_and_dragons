<?php

include_once("nodebite-swiss-army-oop.php");

$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "Save_data"
));

unset($data_base->weapons);
unset($data_base->armors);
unset($data_base->protagonists);
unset($data_base->antagonists);

$object_weapons = &$data_base->weapons;
$object_armors = &$data_base->armors;
$object_protagonists = &$data_base->protagonists;
$object_antagonists = &$data_base->antagonists;

// $object_weapons = array();  använd inte denna rad!!! 
  $object_weapons[] = New weapon("Elf Sword", array("Weapon Strength" => 10));
  $object_weapons[] = New weapon("Oak Bow", array("Weapon Strength" => 20));
  $object_weapons[] = New weapon("Dwarf Axe", array("Weapon Strength" => 30));


// $object_armors = array(); använd inte denna rad!!! 
  $object_armors[] = New armor("Mithril Shirt", array("Armor Strength" => 10));
  $object_armors[] = New armor("Plate Armor", array("Armor Strength" => 20));
  $object_armors[] = New armor("Robe", array("Armor Strength" => 30));


// $object_items = array();  använd inte denna rad!!! 
//   $object_items[] = New item("Potion", array("Heal" => 0));
//   $object_items[] = New item("Herb", array("Heal" => 0));
//   $object_items[] = New item("Beer", array("Strength" => 0));
//--------------------------------------------------------------
// skapar karaktärer om inte dessa finns i databasen
// if (!count($data_base->characters)){

  $object_king_arthur = New Knight("King Arthur");
  $object_legolas = New Archer("Legolas");
  $object_merlin = New Sorcerer("Merlin");

  $object_king_arthur->weapons = $object_weapons[0];
  $object_legolas->weapons = $object_weapons[1];
  $object_merlin->weapons = $object_weapons[2];

  $object_king_arthur->armors = $object_armors[0];
  $object_legolas->armors = $object_armors[1];
  $object_merlin->armors = $object_armors[2];

  $object_protagonists[] = New Protagonists(
    "Protagonists",
    $object_king_arthur,
    $object_legolas,
    $object_merlin
  );


// $object_antagonists = array();

  $object_antagonists[] = New Antagonist("Necro Mancer", array("Health" => 700, "Strength" => 10));
  $object_antagonists[] = New Antagonist("South Dragon", array("Health" => 2000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("North Dragon", array("Health" => 3000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Dark Knight", array("Health" => 4000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Owl Eye", array("Health" => 5000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Vampir", array("Health" => 6000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Skeleton", array("Health" => 7000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Manticor", array("Health" => 8000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Ghoul", array("Health" => 9000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Magician", array("Health" => 10000,"Strength" => 10));



echo(json_encode(true));