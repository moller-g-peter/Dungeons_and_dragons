<?php

class armor extends Base {
	
	protected $armor_name;
	protected $armor_strength = 0;
	protected $armor_skills = array();


	public function __construct($armor_name, $armor_skills)
	{
		$this->armor_name = $armor_name;
		$this->armor_skills = $armor_skills;
	}

	public function get_name()
	{
		return $this->armor_strength;
	}

	public function get_armor_strength()
	{
		$armor_strength = $this->armor_strength;
		foreach ($this->armor_skills as $skillName => $skillValue) {
			$armor_strength += $skillValue;
		}
		return $armor_strength;
	}
}