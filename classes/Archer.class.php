<?php

class Archer extends character {
	
	
	public function __construct($name) 
	{
		$this->name = $name;
		$level = 50;
		$health = 100;
		$strength = 1;
	}


	// public function set_character_name($character_name){
	// 	$this->character_name = $character_name;
	// }
	
	// public function get_character_name(){
	// 	return $character_name;
	// }
}