<?php

class Necromancer extends character {

	// protected $name;
	// protected $health = 100;
	// protected $strength = 1;
	// protected $critical_hit;

	public function __construct($name) 
	{
		$this->name = $name;
		$health = 1000;
		$strength = 1;
		// $this->level = $level;
		// $this->health = $health;
	}

	// public function set_character_name($name){
	// 	$this->name = $name;
	// }

	// public function get_character_name(){
	// 	return $this->name;
	// }
}