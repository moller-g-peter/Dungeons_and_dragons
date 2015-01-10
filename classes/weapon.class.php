<?php

class weapon extends Base {
	
	public $weapon_name;
	public $weapon_damage = 10;


	public function __construct($weapon_name, $weapon_damage) 
	{
		$this->weapon_name = $weapon_name;
		$this->weapon_damage = $weapon_damage;
	}

	public function set_name($weapon_damage)
	{
		$this->weapon_damage = $weapon_damage;
	}

	public function get_name()
	{
		return $this->weapon_damage;
	}
}