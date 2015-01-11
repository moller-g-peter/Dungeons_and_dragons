<?php

class Knight extends character {
	
	protected $health = 50;
	protected $strength = 20;
	protected $dexterity = 15;
	protected $intelligence = 15;
	
	

//--------------------------------------------------------------
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