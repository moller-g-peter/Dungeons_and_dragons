<?php

class character extends Base
{
	
	protected $name;
	protected $level = 50;
	protected $weapons = array();
	// protected $armors = array();
	// protected $items = array();
	
	protected $health = 100;
	protected $strength = 1;
	protected $dexterity = 25;
	protected $intelligence = 25;


	public function __construct($name) 
	{
		$this->name = $name;
	}
//--------------------------------------------------------------
	public function set_name($name)
	{
		$this->name = $name;
	}

	public function get_name()
	{
		return $this->name;
	}
//--------------------------------------------------------------
		public function set_weapons($weapons)
	{
		if(count($this->weapons) < 3)
		{
		$this->weapons[] = $weapons;
		}
	}

	public function get_weapons()
	{
		return $this->weapons;
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

				for ($i=0; $i < count($object_weapons); $i++){
					$damage += $object_weapons[$i]->weapon_strength;					
				}

				$damage = rand(1,10) + $t10_dice_roll + $object_weapons[0];
				$opponent->health -= $damage;
				$object_weapons = $this->weapons;

				$result = $this->name." attacks.<br>"."A critical hit!! ".$opponent->name." suffers ".$damage." point(s) of damage.<br>";
			}
			else if ($t10_dice_roll == 1)
			{
				// no hit...opponent dodges attack
				$result = $this->name." attacks.<br>"."The attack missed! ".$opponent->name." suffers ".$damage." point(s) of damage.<br>";
			}
			else
			{
				// normal hit
				
				for ($i=0; $i < count($object_weapons); $i++){
					$damage += $object_weapons[$i]->weapon_strength;	
				}

				$damage = rand(1,10) + $object_weapons[0];
				$opponent->health -= $damage;
				$object_weapons = $this->weapons;

				$result = $this->name." attacks.<br>".$opponent->name." is hit and suffers ".$damage." point(s) of damage.<br>";
			}

					if ($opponent->is_alive())
					{return $result;}
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
		{return true;}
		else
		{return false;}
	}
}

//--------------------------------------------------------------

