<?php

class Knight extends character {

	protected $character_name;
	protected $level;
	protected $health;
	protected $strength;
	protected $dexterity;
	protected $intelligence;
	protected $critical_hit;
	protected $items = array();
	
	
	public function set_character_name($character_name1){
		$this->character_name = $character_name1;
	}
	
	public function get_character_name(){
		return $this->character_name;
	}
}