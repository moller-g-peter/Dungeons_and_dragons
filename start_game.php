<?php

include_once("nodebite-swiss-army-oop.php");

$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "Save_data"
));

$object_weapons = &$data_base->weapons;
$object_armors = &$data_base->armors;
$object_protagonists = &$data_base->protagonists;
$object_antagonists = &$data_base->antagonists;

// $object_weapons = array();  
  $object_weapons[] = New Weapon("Elf Sword", array("Weapon Strength" => 100));
  $object_weapons[] = New weapon("Oak Bow", array("Weapon Strength" => 20));
  $object_weapons[] = New weapon("Dwarf Axe", array("Weapon Strength" => 30));


// $object_armors = array();  
  $object_armors[] = New armor("Mithril Shirt", array("Armor Strength" => 0));
  $object_armors[] = New armor("Plate Armor", array("Armor Strength" => 0));
  $object_armors[] = New armor("Robe", array("Armor Strength" => 0));


// $object_items = array();  
//   $object_items[] = New item("Potion", array("Heal" => 0));
//   $object_items[] = New item("Herb", array("Heal" => 0));
//   $object_items[] = New item("Beer", array("Strength" => 0));
//-------------------------------------------------------------

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

  $object_king_arthur = New Knight("King Arthur");
  $object_legolas = New Archer("Legolas");
  $object_merlin = New Sorcerer("Merlin");

  $object_king_arthur->weapons = $object_weapons[0];
  $object_legolas->weapons = $object_weapons[1];
  $object_merlin->weapons = $object_weapons[2];

  $object_protagonists[] = New Protagonists(
    "Protagonists",
    $object_king_arthur,
    $object_legolas,
    $object_merlin
  );


// $object_antagonists = array();

  $object_antagonists[] = New Antagonist("Necro Mancer", array("Health" => 70, "Strength" => 10));
  $object_antagonists[] = New Antagonist("South Dragon", array("Health" => 2000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("North Dragon", array("Health" => 3000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Dark Knight", array("Health" => 4000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Owl Eye", array("Health" => 5000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Vampir", array("Health" => 6000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Skeleton", array("Health" => 7000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Manticor", array("Health" => 8000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Ghoul", array("Health" => 9000,"Strength" => 10));
  $object_antagonists[] = New Antagonist("Magician", array("Health" => 10000,"Strength" => 10));
