<?php

class Archer extends character {
	
	protected $health = 100;
	protected $strength = 1;
	protected $dexterity = 25;
	protected $intelligence = 25;
	
	// public function __construct($name) 
	// {
	// 	$this->name = $name;
	// 	$level = 50;
	// 	$health = 10000;
	// 	$strength = 1;
	// }



	public function set_health($health)
	{
		$this->health = $health;
	}

	public function get_health()
	{
		return $this->health;
	}
//--------------------------------------------------------------
	public function set_strength($strength)
	{
		$this->strength = $strength;
	}

	public function get_strength()
	{
		return $this->strength;
	}
//--------------------------------------------------------------


	public function set_dexterity($dexterity)
	{
		$this->dexterity = $dexterity;
	}

	public function get_dexterity()
	{
		return $this->dexterity;
	}
//--------------------------------------------------------------

	public function set_intelligence($intelligence)
	{
		$this->intelligence = $intelligence;
	}

	public function get_intelligence()
	{
		return $this->intelligence;
	}
//--------------------------------------------------------------
}