<?php

class Necromancer extends character {

	protected $character_name;
	protected $health;
	protected $strength;
	protected $critical_hit;






	public function set_character_name($character_name1){
		$this->character_name = $character_name1;
	}

	public function get_character_name(){
		return $this->character_name;
	}
}