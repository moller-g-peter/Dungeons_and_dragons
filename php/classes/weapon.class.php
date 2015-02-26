<?php

class weapon extends Base {
	
	protected $weapon_name;
	protected $weapon_strength = 0;
	protected $weapon_skills = array();


	public function __construct($weapon_name, $weapon_skills)
	{
		$this->weapon_name = $weapon_name;
		$this->weapon_skills = $weapon_skills;
	}

	// public function set_name($weapon_strength)
	// {
	// 	$this->weapon_strength = $weapon_strength;
	// }

	public function get_name()
	{
		return $this->weapon_strength;
	}

	public function get_weapon_strength()
	{
		$weapon_strength = $this->weapon_strength;
		foreach ($this->weapon_skills as $skillName => $skillValue) {
			$weapon_strength += $skillValue;
		}
		return $weapon_strength;
	}
}