<?php

class Antagonist extends character {

	// protected $name;
	// protected $health = 100;
	// protected $strength = 1;
	// protected $critical_hit;

	public function __construct($name, $stats) 
	{
		$this->name = $name;
		$this->health = $stats["Health"];
		$this->strength = $stats["Strength"];
	}

	// public function set_character_name($name){
	// 	$this->name = $name;
	// }

	// public function get_character_name(){
	// 	return $this->name;
	// }


	// public function set_character_health($health){
	// 	$this->health = $health;
	// }

	// public function get_character_health(){
	// 	return $this->health;
	// }
}