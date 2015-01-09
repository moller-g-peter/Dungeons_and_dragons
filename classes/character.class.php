<?php

class character extends Base
{
	
	protected $name;
	protected $level = 50;
	
	protected $health = 100;
	protected $strength = 1;
	protected $dexterity = 25;
	protected $intelligence = 25;

	protected $items = array();

	public function __construct($name) 
	{
		$this->name = $name;
	}

	public function set_name($name)
	{
		$this->name = $name;
	}

	public function get_name()
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
		$damage = 0;
		$t10_dice_roll = rand(1,10);
		$result;
		if($this->is_alive())
		{
			if($t10_dice_roll == 10)
			{
				// critical hit!!
				$damage = rand(1,10) + $t10_dice_roll;
				$opponent->health -= $damage;
				for ($i=0; $i < count($object_weapons); $i++){
					$damage += $weapons[$i]->weapon_damage;	
				}				
				$result = "A critical hit!! ".$this->name." suffers ".$damage." point(s) of damage.";
			}
			else if ($t10_dice_roll == 1)
			{
				// no hit...opponent dodges attack
				$result = "The attack missed!".$this->name." suffers ".$damage." point(s) of damage.";
			}
			else
			{
				// normal hit
				$damage = rand(1,10);
				$opponent->health -= $damage;
				for ($i=0; $i < count($object_weapons); $i++){
					$damage += $weapons[$i]->weapon_damage;	
				}
				$result = $this->name." is hit and suffers ".$damage." point(s) of damage.";
			}

			if ($opponent->is_alive())
			{
				return $result;
			}
			else
			{
				$this->level++;
				return $this->name." stands victorius! ".$this->level." gained.<br>";
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

