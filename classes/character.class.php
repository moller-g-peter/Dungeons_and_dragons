<?php

class character
{
	
	protected $name;
	protected $level = 50;
	protected $health = 1000;
	// protected $strength = 25;
	// protected $dexterity = 25;
	// protected $intelligence = 25;

	// protected $critical_hit = 1;
	// protected $items = array();

	public function __construct($name) 
	{
		$this->name = $name;
		// $this->level = $level;
		// $this->health = $health;
	}

	public function set_character_name($name)
	{
		$this->name = $name;
	}

	public function get_character_name()
	{
		return $this->name;
	}

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
// if-sats för hit metoder

	public function battle($opponent)
	{
		$damage;
		$t10_dice_roll = rand(1,10);
		$result;
		if($this->is_alive())
		{
			if($t10_dice_roll == 10)
			{
				// critical hit!!
				$damage = rand(1,10);
				$opponent->set_health($opponent->get_health - $damage);
				$result = "A critical hit!! of damage.";
			}
			else if ($t10_dice_roll == 1)
			{
				// no hit...opponent dodges attack
				$result = "The attack missed!suffers 0 of damage.";
			}
			else
			{
				// normal hit
				$damage = rand(1,10);
				$opponent->set_health($opponent->get_health - $damage);
				$result = "hits of damage.";
			}

			if ($opponent->is_alive())
			{
				return $result;
			}
			else
			{
				$this->level++;
				return $this->name." won the battle and leveled up to level ".$this->level."<br>";
			}
		}
		else
		{
			return $this->name. " is stone fucking dead!<br>";
		}
	}

	public function is_alive()
	{
		if($this->health >0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

//--------------------------------------------------------------

