<?php

include_once("nodebite-swiss-army-oop.php");

$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "Save_data"
));

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
  $object_king_richard = New Knight("King Richard");
	// $object_king_arthur->set_character_name("King Arthur");

	$data_base->characters[] = &$object_king_arthur;
  $data_base->characters[] = &$object_king_richard;
}else {
  	$object_king_arthur = &$data_base->characters[0];
    $object_king_richard = &$data_base->characters[1];
}

//--------------------------------------------------------------

if (!count($data_base->enemies)){

	$object_necromancer = New Necromancer("Necro Mancer");
	// $object_necromancer->set_character_name("Necro Mancer");

	$data_base->enemies[] = &$object_necromancer;
}else {
  	$object_necromancer = &$data_base->enemies[0];
}

//$player = $objekt_king_arthur;
$player = New Protagonists("ProtoTeam", $object_king_arthur, $object_king_richard);
$enemy = $object_necromancer;

$battle_story = array();

while($object_king_arthur->is_alive() == true && $object_necromancer->is_alive() == true){
  //echo ("<br>".$object_king_arthur->battle($object_necromancer));
  $battle_story[] = $player->battle($enemy);
  $battle_story[] = $enemy->battle($player);
  $battle_story[] = HP_status($player);
  $battle_story[] = HP_status($enemy);
}
// var_dump($object_necromancer);
// var_dump($object_king_arthur);

var_dump($player);

//--------------------------------------------------------------
// (måste ha variabelnamn($...) som värde för att hämta från DB)

$battle_order = array($object_king_arthur, $object_necromancer);

// var_dump($battle_order);
