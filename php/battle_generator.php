<?php

include_once("nodebite-swiss-army-oop.php");

$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "Save_data"
));

// $object_weapons = &$data_base->weapons;
// $object_armors = &$data_base->armors;
$object_protagonists = &$data_base->protagonists;
$object_antagonists = &$data_base->antagonists;


function HP_status($name){
  $health = $name->name." HP: ".$name->health;
  return $health;
}

$battle_story = array();
// var_dump($object_protagonists);
// exit();
//
// while($object_protagonists[0]->is_alive() == true && $object_antagonists[0]->is_alive() == true){
  $battle_story[] = $object_protagonists[0]->battle($object_antagonists[0]);
  $battle_story[] = $object_antagonists[0]->battle($object_protagonists[0]);
  $battle_story[] = HP_status($object_protagonists[0]);
  $battle_story[] = HP_status($object_antagonists[0]);
// }

  for($i=0;$i<count($battle_story);$i++){

    $push[] = $battle_story[$i];
    // exit();
  }
    echo(json_encode($push));
