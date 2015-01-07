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
// skapar karaktärer om inte dessa finns i databasen
if (!count($data_base->characters)){

	$object_king_arthur = New Knight("King Arthur");
	// $object_king_arthur->set_character_name("King Arthur");

	$data_base->characters[] = $object_king_arthur;
}else {
  	$object_king_arthur = $data_base->characters[0];
}

//--------------------------------------------------------------

if (!count($data_base->enemies)){

	$object_necromancer = New Necromancer("Necro Mancer");
	// $object_necromancer->set_character_name("Necro Mancer");

	$data_base->enemies[] = $object_necromancer;
}else {
  	$object_necromancer = $data_base->enemies[0];
}

while($object_king_arthur->is_alive() == true && $object_necromancer->is_alive() == true){
  echo ($object_king_arthur->battle($object_necromancer));
  echo ($object_necromancer->battle($object_king_arthur));
}

var_dump($object_necromancer);
var_dump($object_king_arthur);
//--------------------------------------------------------------
// (måste ha variabelnamn($...) som värde för att hämta från DB)
$battle_order = array($object_king_arthur, $object_necromancer);

// var_dump($battle_order);

//--------------------------------------------------------------
// kollar alla karaktärers health points
// denna ska separeras på skärmen senare

function HP_status($character_name){

  $character_health = $character_name->name." HP: ".$character_name->health;
  return $health;
}