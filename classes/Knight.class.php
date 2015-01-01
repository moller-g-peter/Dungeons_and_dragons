<?php

class Knight extends character {

	protected $character_name;
	protected $level = 50;

	protected $health = 100;
	protected $strength = 5;
	protected $dexterity = 5;
	protected $intelligence = 5;

	protected $critical_hit = 1;


	public function set_character_name($character_name1){
		
			$this->character_name = $character_name1;
		
	}

	public function get_character_name(){
		return $this->character_name;
	}

}