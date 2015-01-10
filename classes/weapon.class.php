<?php

class weapon extends Base {
	
	public $weapon_name;
	public $weapon_strength = 10;


	public function __construct($weapon_name, $weapon_strength) 
	{
		$this->weapon_name = $weapon_name;
		$this->weapon_strength = $weapon_strength;
	}

	public function set_name($weapon_strength)
	{
		$this->weapon_strength = $weapon_strength;
	}

	public function get_name()
	{
		return $this->weapon_strength;
	}
}