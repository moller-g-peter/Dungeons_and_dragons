<?php

class Sorcerer extends character {

	// protected $hero_name;

	// protected $dexterity;
	// protected $intelligence;
	// protected $critical_hit;
	// protected $items = array();
	
	
	public function __construct($name) 
	{
		$this->name = $name;
		$level = 50;
		$health = 100;
		$strength = 1;
		// $this->level = $level;
		// $this->health = $health;
	}


	// public function set_character_name($character_name){
	// 	$this->character_name = $character_name;
	// }
	
	// public function get_character_name(){
	// 	return $character_name;
	// }
}