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

	$object_king_arthur = New Knight();
	$object_king_arthur->set_character_name("King Arthur");

	$data_base->characters[] = $object_king_arthur;
}else {
  	$object_king_arthur = &$data_base->characters[0];
}

//--------------------------------------------------------------
// skapar fiender om inte dessa finns i databasen
if (!count($data_base->enemies)){

	$object_necromancer = New Necromancer();
	$object_necromancer->set_character_name("Necro Mancer");

	$data_base->enemies[] = $object_necromancer;
}else {
  	$object_necromancer = &$data_base->enemies[0];
}

//--------------------------------------------------------------
// (måste ha variabelnamn($...) som värde för att hämta från DB)
$battle_order = array($object_king_arthur, $object_necromancer);

var_dump($battle_order);

//--------------------------------------------------------------
// if-sats för hit metoder
$t10_dice = get_random_no rand(1,10);

public function battle($opposite_character){

	if($t10_dice >=2 && $t10_dice <= 9){ // normal hit
		$get_random_no(1,10);
		$ (opponent) - t10_dice 
	}
	elseif($t10_dice = 10){ // critical hit!!
		$t10_dice += get_random_no(1,10);
		// här plus:ar du på 1:a "get_rand..." med 2:a "get_rand..."
	}
	else $t10_dice = 1 { // no hit...opposite_character dodges attack
		echo ("<p>You missed!!</p>");
	}
}

// här sätts värdet för skadan som sker i if-satsen ovan
$damage = round($health - $t10_dice);

$opponent->$health = round($health - $damage);

//--------------------------------------------------------------
// 
if($object_king_arthur){
	$
}






//--------------------------------------------------------------






//--------------------------------------------------------------


// var_dump($data_base);