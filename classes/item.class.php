<?php

class item extends Base {
	
	protected $heal = 10;
	protected $drunk = -10;


	public function __construct($weapon_strength) 
	{
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