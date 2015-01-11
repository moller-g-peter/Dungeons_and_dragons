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


function HP_status($name){

  $health = $name->name." HP: ".$name->health;
  return $health;
}


// $object_antagonists = array();

//   $object_antagonists[] = New Antagonist("Necro Mancer", array("Health" => 70, "Strength" => 10));
//   $object_antagonists[] = New Antagonist("South Dragon", array("Health" => 2000,"Strength" => 10));
//   $object_antagonists[] = New Antagonist("North Dragon", array("Health" => 3000,"Strength" => 10));
//   $object_antagonists[] = New Antagonist("Dark Knight", array("Health" => 4000,"Strength" => 10));
//   $object_antagonists[] = New Antagonist("Owl Eye", array("Health" => 5000,"Strength" => 10));
//   $object_antagonists[] = New Antagonist("Vampir", array("Health" => 6000,"Strength" => 10));
//   $object_antagonists[] = New Antagonist("Skeleton", array("Health" => 7000,"Strength" => 10));
//   $object_antagonists[] = New Antagonist("Manticor", array("Health" => 8000,"Strength" => 10));
//   $object_antagonists[] = New Antagonist("Ghoul", array("Health" => 9000,"Strength" => 10));
//   $object_antagonists[] = New Antagonist("Magician", array("Health" => 10000,"Strength" => 10));

// $enemy = $object_necromancer;

$battle_story = array();
// var_dump($object_protagonists);
// exit();
//
while($object_protagonists[0]->is_alive() == true && $object_antagonists[0]->is_alive() == true){
  // echo ("<br>".$object_king_arthur->battle($object_necromancer));
  $battle_story[] = $object_protagonists[0]->battle($object_antagonists[0]);
  $battle_story[] = $object_antagonists[0]->battle($object_protagonists[0]);
  $battle_story[] = HP_status($object_protagonists[0]);
  $battle_story[] = HP_status($object_antagonists[0]);
}

  for($i=0;$i<count($battle_story);$i++){
    // echo($battle_story[$i]);
    // echo "<br>";
    $push[] = $battle_story[$i];
    // exit();
  }
    echo(json_encode($push));

// $hr = "<hr>";
// var_dump($hr);

// var_dump($battle_story);
// var_dump($player);
// var_dump($enemy);

//--------------------------------------------------------------
// (måste ha variabelnamn($...) som värde för att hämta från DB)

// $battle_order = array($object_king_arthur, $object_necromancer);

// var_dump($battle_order);

// $hr = "<hr>";
// var_dump($hr);

// var_dump($object_weapons);
// var_dump($object_armors);
// var_dump($object_items);